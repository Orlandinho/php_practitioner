<?php
declare(strict_types=1);
class Router
{
    protected array $routes = [];

    public static function load($file)
    {
        $router = new static();
        require $file;
        return $router;
    }

    public function define(array $routes)
    {
        $this->routes = $routes;
    }

    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }

        throw new Exception('No route found');
    }
}