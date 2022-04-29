<?php

namespace app\core;

use app\controllers\Controller;

/**
 * Application
 */


class Application
{
    public static string $rootDIR;
    public Router $router;
    public Request $request;
    public Response $response;
    public Database $db;
    public Controller $controller;
    public static Application $app;

    public function __construct($rootPath, array $config)
    {
        self::$rootDIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
        $this->db = new Database($config['db']);
    }

    public function run()
    {
        $this->router->resolve();
    }


    public function getController()
    {
        return $this->controller;
    }


    public function setController(Controller $controller)
    {
        return $this->controller = $controller;
    }
}