<?php

namespace App\Model;

class Route
{

    private string $method;

    private string $path;

    private string $controller;

    private string $action;

    private array $param;

    public function getMethod(): string
    {
        return $this->method;
    }

    public function setMethod(string $method): void
    {
        $this->method = $method;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function setPath(string $path): void
    {
        $this->path = $path;
    }

    public function getController(): string
    {
        return $this->controller;
    }

    public function setController(string $controller): void
    {
        $this->controller = $controller;
    }

    public function getAction(): string
    {
        return $this->action;
    }

    public function setAction(string $action): void
    {
        $this->action = $action;
    }

    public function getParam(): array
    {
        return $this->param;
    }

    public function setParam(array $param): void
    {
        $this->param = $param;
    }

}