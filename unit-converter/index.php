<?php


require "functions.php";


$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


$routes = [
    "/" => "controllers/home.php",
    "/home" => "controllers/home.php",
    "/result" => "controllers/result.php",
];


if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    http_response_code(404);

    require "controllers/error.php";
}
