<?php

namespace app\core;


/**
 * Application
 */


class Application
{
    public static string $rootDIR;
    public Router $router;
    public Request $request;
    public Response $response;
    public static Application $app;

    public function __construct($rootPath)
    {
        self::$rootDIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
    }

    public function run()
    {
        $this->router->resolve();
    }
}