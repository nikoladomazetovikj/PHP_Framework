<?php

require_once __DIR__ . '/../vendor/autoload.php';

use app\core\Application;


$app = new Application(dirname(__DIR__));

$app->router->get('/', 'home');

$app->router->get('/aboutme', 'aboutme');

$app->router->post('/aboutme', function () {

    echo "success";
});

$app->run();
