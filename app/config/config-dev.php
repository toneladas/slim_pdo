<?php

return [
    'settings' => [
        'displayErrorDetails' => true,
        'db' => [
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
