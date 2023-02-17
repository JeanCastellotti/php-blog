<?php

namespace Core;

class Router
{
    protected $routes;

    public function get($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'GET'
        ];
    }

    public function post($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'POST'
        ];
    }

    public function delete($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'DELETE'
        ];
    }

    public function put($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'PUT'
        ];
    }

    public function patch($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'PATCH'
        ];
    }

    public function route($uri)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri) {
                return require base_path($route['controller']);
            }
        }

        $this->abort();
    }

    protected function abort($statusCode = 404) {
        http_response_code($statusCode);

        require base_path("views/{$statusCode}.php");
        
        die();
    }
}