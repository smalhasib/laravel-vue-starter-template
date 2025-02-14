<?php

return [
    /*
    |--------------------------------------------------------------------------
    | API Version
    |--------------------------------------------------------------------------
    */
    'version' => env('API_VERSION', 'v1'),

    /*
    |--------------------------------------------------------------------------
    | API Rate Limiting
    |--------------------------------------------------------------------------
    */
    'throttle' => [
        'enabled' => env('API_RATE_LIMIT_ENABLED', true),
        'attempts' => env('API_RATE_LIMIT_ATTEMPTS', 60),
        'interval' => env('API_RATE_LIMIT_INTERVAL', 1), // In minutes
    ],

    /*
    |--------------------------------------------------------------------------
    | API Documentation
    |--------------------------------------------------------------------------
    */
    'documentation' => [
        'enabled' => env('API_DOCUMENTATION_ENABLED', true),
        'path' => env('API_DOCUMENTATION_PATH', 'docs'),
    ],
];
