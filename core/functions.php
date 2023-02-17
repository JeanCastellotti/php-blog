<?php

use Core\Response;

function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    die();
}

function currentPage($uri)
{
    return parse_url($_SERVER['REQUEST_URI'])['path'] === $uri;
}

function abort($statusCode = 404)
{
    http_response_code($statusCode);

    require base_path("views/{$statusCode}.php");

    die();
}

function authorize($condition, $statusCode = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($statusCode);
    }
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $data = [])
{
    extract($data);

    require base_path('views/' . $path);
}
