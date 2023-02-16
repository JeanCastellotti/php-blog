<?php

$routes = require base_path('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

function abort($statusCode = 404)
{
    http_response_code($statusCode);
    require base_path("views/{$statusCode}.php");
    die();
}

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require base_path($routes[$uri]);
    }
    else {
        abort();
    }
}

routeToController($uri, $routes);