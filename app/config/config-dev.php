<?php

return [
    'settings' => [
        'displayErrorDetails' => true,
        'db' => [
            'host'     => 'localhost',
            'user'     => 'root',
            'password' => 'Aranda',
            'dbname'   => 'slim_pdo',
        ],
        'logger'   => [
            'name'     => 'dev',
            'filename' => __DIR__  . '/../../logs/app-dev.log',
            'level'    => \Monolog\Logger::DEBUG
        ],
        'view' => [
            'cache' => false,
            'debug' => true,
            'path'  => __DIR__ . '/../templates',
        ],
    ]
];
