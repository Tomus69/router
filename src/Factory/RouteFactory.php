<?php

namespace App\Factory;

use App\Builder\RouteBuilder;
use App\Model\Route;

class RouteFactory
{

    private Route $route;
    private RouteBuilder $routeBuilder;

    public function __construct()
    {
        $this->route = new Route();
        $this->routeBuilder = new RouteBuilder();
    }

    public function create(string $path, string $method): ?Route
    {
        $json = json_decode(file_get_contents(__DIR__."/../../config/routes.json"));
        var_dump($json);

        $route = clone $this->route;
        $this->routeBuilder->build($route);

        return null;
    }

}