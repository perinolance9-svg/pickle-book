<?php
// Database credentials. On a host, edit these or set environment variables
return [
    'host'    => getenv('DB_HOST') ?: 'sql313.infinityfree.com',
    'name'    => getenv('DB_NAME') ?: 'if0_43302393_pickle_book',
    'user'    => getenv('DB_USER') ?: 'if0_43302393',
    'pass'    => getenv('DB_PASS') ?: 'IMONG_INFINITYFREE_PASSWORD',
    'charset' => 'utf8mb4',
];