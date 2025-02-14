# Laravel Vue MySQL Starter Template

A modern full-stack starter template featuring Laravel, Vue.js, and MySQL with Docker containerization.

## Tech Stack

### Backend

- Laravel v11.31
- PHP 8.2
- MySQL 8.4
- PHPMyAdmin

### Frontend

- Vue.js 3.5.13
- Node.js 20
- TypeScript
- Tailwind CSS 4.0.6
- Vite 6.0.11

## Features

- 🐳 Docker containerization for easy development setup
- 🔒 Pre-configured database migrations and seeders
- 🎨 Tailwind CSS for styling
- 📦 Pinia for state management
- 🔄 Hot-reloading for development
- 🔍 Laravel Telescope for debugging (development only)
- ⚡ Vite for fast frontend development
- 🗃️ PHPMyAdmin for database management

## Project Structure

- Frontend code is in `frontend/src`
- Backend code is in `backend/app`
- API routes are defined in `backend/routes/api.php`
- Database migrations are in `backend/database/migrations`

## Docker Configuration

The project includes four main services:

1. **Backend (Laravel)**

   - PHP 8.2 CLI
   - Exposed port: 8000

2. **Frontend (Vue)**

   - Node.js 20 Alpine
   - Exposed port: 3000

3. **Database (MySQL)**

   - MySQL 8.4
   - Exposed port: 3306
   - Default credentials:
     - Database: laravel
     - User: laravel
     - Password: password

4. **PHPMyAdmin**
   - Exposed port: 8080
   - Default credentials:
     - User: root
     - Password: root_password

## Database Setup

The application uses MySQL 8.4 and includes automatic database initialization through Docker. The `docker-entrypoint.sh` script will:

1. Wait for MySQL to become available
2. Run database migrations
3. Check if the database is empty (by checking users table)
4. Run seeds only on first initialization

The entrypoint script uses a smart detection mechanism to prevent duplicate seeding:

- On first run: Executes both migrations and seeds
- On subsequent runs: Only executes migrations, preserving existing data

If you want to reset the database at any point, you can:

1. Clear the database:

   ```bash
   # Stop the containers first
   docker-compose down

   # Remove the database volume
   docker volume rm laravel_db_data

   # Start containers again
   docker-compose up -d
   ```

## Getting Started

1. Clone the repository
2. Copy environment files:
   ```bash
   cp backend/.env.example backend/.env
   ```
3. Start Docker containers:
   ```bash
   docker-compose up -d
   ```
4. Access the applications:
   - Frontend: http://localhost:3000
   - Backend API: http://localhost:8000
   - PHPMyAdmin: http://localhost:8080

## Installed Packages

### Backend (Laravel)

- Laravel Framework v11.31
- Laravel Tinker v2.9
- Laravel Telescope v5.5 (dev)
- PHPUnit v11.0.1 (dev)
- Laravel Pint (dev)
- Faker PHP (dev)

### Frontend (Vue)

- Vue Router v4.5.0
- Pinia v2.3.1
- Axios
- TypeScript
- ESLint + Prettier
- Tailwind CSS
- Vue DevTools Plugin
- Vue TypeScript Support

## License

MIT License
