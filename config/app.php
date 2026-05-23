<?php

return [
    'app_name' => 'Techpark Mozambique',
    'app_url' => 'http://localhost/techpark/public',
    'base_path' => '',
    'env' => 'local',
    'debug' => true,

    'db' => [
        'host' => '127.0.0.1',
        'name' => 'techpark_db',
        'user' => 'root',
        'pass' => '',
        'charset' => 'utf8mb4',
    ],

    'security' => [
        'session_name' => 'TECHPARK_SESSION',
        'session_lifetime' => 1800,
        'csrf_token_name' => '_csrf',
        'max_login_attempts' => 5,
        'login_lock_seconds' => 900,
    ],
];
