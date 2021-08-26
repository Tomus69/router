<?php

namespace App\Router;

use App\Factory\RouteFactory;

class Router
{

    private RouteFactory $routeFactory;

    public function __construct()
    {
        $this->routeFactory = new RouteFactory();
    }

    public function route()
    {
        $path = filter_input(INPUT_SERVER, "PATH_INFO") ?? "/";
        $method = filter_input(INPUT_SERVER, "REQUEST_METHOD");

        $route = $this->routeFactory->create($path, $method);

        if (!$route){
            throw new RouterException('Error not route found');
        }
    }
}