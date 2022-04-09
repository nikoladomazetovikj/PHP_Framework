<?php

require_once __DIR__ . '/../vendor/autoload.php';

use app\core\Application;

$app = new Application();

$app->router->get('/', function () {

    return "Hello world!";
});

$app->router->get('/aboutme', 'aboutme');

$app->router->get('/contact', function () {

    return "This is my contact";
});



$app->run();