<?php

namespace App\Builder;

use App\Model\Route;

class RouteBuilder
{

    public function build(Route $route, \stdClass $data): ?Route
    {
        $route->setController($data->controller);
        $route->setMethod($data->method);
        $route->setPath($data->path);
        $route->setAction($data->action);
        return $route;
    }
}