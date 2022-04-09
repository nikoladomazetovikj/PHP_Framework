<?php

namespace app\core;


/**
 * Router
 */

class Router
{
    protected array $routes = [];

    public Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path];

        if ($callback == false) {
            echo "404 NOT FOUND";
            exit;
        }

        if (is_string($callback)) {

            return $this->renderView($callback);
        }

        echo call_user_func($callback);
    }

    public function renderView($view)
    {
        include_once __DIR__ . "/../views/$view.php";
    }
}