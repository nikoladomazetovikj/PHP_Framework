<?php

require_once __DIR__ . '/../vendor/autoload.php';

use app\controllers\SiteController;
use app\core\Application;


$app = new Application(dirname(__DIR__));

$app->router->get('/', [new SiteController(), 'index']);

$app->router->get('/contact', [new SiteController(), 'show']);

// $app->router->post('/aboutme', [new SiteController(), 'index']);

$app->run();