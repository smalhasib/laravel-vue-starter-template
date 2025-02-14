#!/bin/bash
set -e

# Wait for MySQL to be ready
echo "Waiting for MySQL..."
max_tries=30
counter=0
while ! php artisan db:show 2>/dev/null; do
    sleep 1
    counter=$((counter + 1))
    if [ $counter -gt $max_tries ]; then
        echo "Error: MySQL did not become available in time"
        exit 1
    fi
done

# Run migrations and seeds
echo "Running migrations and seeds..."
# Check if users table exists and is empty
if ! php artisan tinker --execute="Schema::hasTable('users') && \App\Models\User::count() > 0"; then
    echo "First time setup: running migrations and seeds..."
    php artisan migrate
    php artisan db:seed
else
    echo "Database already initialized, skipping seeds..."
    php artisan migrate
fi

# Start the application
exec "$@"
