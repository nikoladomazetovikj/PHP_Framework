<?php

use Dotenv\Dotenv;
use app\core\Application;
use app\controllers\AuthController;
use app\controllers\SiteController;
use app\models\User;

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();


$config = [
    'userClass' => User::class,
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],

    ]
];

$app = new Application(dirname(__DIR__), $config);

$app->router->get('/', [new SiteController(), 'index']);

$app->router->get('/contact', [new SiteController(), 'show']);
$app->router->post('/contact', [new SiteController(), 'store']);

$app->router->get('/login', [new AuthController(), 'login']);
$app->router->post('/login', [new AuthController(), 'login']);

$app->router->get('/register', [new AuthController(), 'register']);
$app->router->post('/register', [new AuthController(), 'register']);

$app->router->get('/logout', [new AuthController(), 'logout']);

$app->router->get('/profile', [new AuthController(), 'profile']);

$app->run();