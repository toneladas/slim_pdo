<?php

require '../vendor/autoload.php';

$config = require '../app/config/config-dev.php';
$app = new \Slim\App($config);

require '../app/config/dependencies.php';
require '../app/config/routes.php';

$app->run();
