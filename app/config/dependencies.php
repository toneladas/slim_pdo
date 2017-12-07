<?php

$container = $app->getContainer();

$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger   = new \Monolog\Logger($settings['name']);
    $filename = $settings['filename'];

    $stream = new \Monolog\Handler\StreamHandler(
        $settings['filename'],
        $settings['level'],
        true,
        0666
    );

    $logger->pushHandler($stream);
    return $logger;
};

$container['view'] = function ($c) {
    $view_config = $c->get('settings')['view'];

    $view = new \Slim\Views\Twig($view_config['path'], [
        'cache' => $view_config['cache'],
        'debug' => $view_config['debug']
    ]);

    $view->addExtension(new \Slim\Views\TwigExtension(
        $c['router'],
        $c['request']->getUri()
    ));

    return $view;
};

$container['pdo'] = function ($c) {
    $pdo_config = $c->get('settings')['db'];

    $dsn = "mysql:dbname=" . $pdo_config['dbname'] . ";host=" . $pdo_config['host'];
    $pdo = new PDO($dsn, $pdo_config['user'], $pdo_config['password'], [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"
    ]);

    return $pdo;
};

################
### Actions ####
################

$container[App\Action\HomeAction::class] = function ($c) {
    return new App\Action\HomeAction($c['logger'], $c['view'], $c['pdo']);
};
