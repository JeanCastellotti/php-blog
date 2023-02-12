<?php

function dd($value) {
    echo '<pre class="bg-slate-900 text-slate-500 rounded p-4">';
    var_dump($value);
    echo '</pre>';

    die();
}

function currentPage($uri) {
    return $_SERVER['REQUEST_URI'] === $uri;
}