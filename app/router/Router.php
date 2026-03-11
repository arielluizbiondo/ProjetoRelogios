<?php

namespace router;

require_once __DIR__ . '/../controllers/SiteController.php';
require_once __DIR__ . '/../controllers/AdminController.php';

use controllers\AdminController;
use controllers\SiteController;

class Router
{
    private $uri;
    private $routes = [];

    public function __construct($uri)
    {
        $uri = explode('?', $uri)[0];
        $uri = str_replace('/projetorelogios/public', '', $uri);
        $this->uri = $uri === '' ? '/' : $uri;
    }

    public function get($route, $action)
    {
        $this->routes['GET|' . $route] = $action;
    }

    public function post($route, $action)
    {
        $this->routes['POST|' . $route] = $action;
    }


    public function dispatch()
    {
        $uri = $this->uri;
        $method = $_SERVER['REQUEST_METHOD'];
        $routeKey = $method . '|' . $uri;

        if (isset($this->routes[$routeKey])) 
        {
            list($controller, $action) = explode('@', $this->routes[$routeKey]);
            $ctrl = new $controller();
            $ctrl->$action();
            return;
        }
        $file = BASE_VIEW_URL . $uri . '.php';
        if (file_exists($file)) 
        {
            require_once $file;
            return;
        }
    }
}