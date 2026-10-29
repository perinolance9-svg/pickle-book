<?php
// Database credentials. On a host, edit these or set environment variables.
return [
    'host'    => getenv('DB_HOST') ?: 'localhost',
    'name'    => getenv('DB_NAME') ?: 'pickle_book_pdo',
    'user'    => getenv('DB_USER') ?: 'root',
    'pass'    => getenv('DB_PASS') ?: '',
    'charset' => 'utf8mb4',
];
