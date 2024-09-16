<?php

$routes = require "routes.php";

// This extracts the url only from the URI, disregarding other words.
$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

function routeToController($uri, $routes)
{

    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

// Return a meaningful http_response_code to the developer console and load the status code view.
function abort($code = 404)
{
    http_response_code($code);

    require "views/{$code}.php";

    die();
}


routeToController($uri, $routes);
