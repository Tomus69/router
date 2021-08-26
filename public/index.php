<?php

require __DIR__.'/../vendor/autoload.php';

$router = new \App\Router\Router();

try {
    $router->route();
} catch (\App\Router\RouterException $e) {
    echo 'Route not found';
}