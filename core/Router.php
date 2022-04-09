<?php

namespace app\core;


/**
 * Router
 */

class Router
{
    protected array $routes = [];
    public Request $request;
    public Response $response;


    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path];

        if ($callback == false) {
            $this->response->setStatusCode(404);
            return $this->renderView("_404");
        }

        if (is_string($callback)) {

            return $this->renderView($callback);
        }

        echo call_user_func($callback);
    }

    public function renderView($view)
    {
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyView($view);
        echo str_replace('{{content}}', $viewContent, $layoutContent);
    }

    public function renderContent($viewContent)
    {
        $layoutContent = $this->layoutContent();
        echo str_replace('{{content}}', $viewContent, $layoutContent);
    }

    protected function layoutContent()
    {
        ob_start();
        include_once Application::$rootDIR . "/views/layouts/main.php";
        return ob_get_clean();
    }

    protected function renderOnlyView($view)
    {
        ob_start();
        include_once Application::$rootDIR . "/views/$view.php";
        return ob_get_clean();
    }
}