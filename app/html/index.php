<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

// Set up configuration
require __DIR__ . '/config.php';

$app = new \Slim\App(['settings' => $config]);

// Set up dependencies
require __DIR__ . '/container.php';

// Set up dependencies
require __DIR__ . '/routes.php';

$app->run();