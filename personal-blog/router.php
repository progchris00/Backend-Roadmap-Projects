<?php

$uri = $_SERVER["REQUEST_URI"];

$routes = [
    "/" => "controllers/home.php",
    "/login" => "controllers/login.php",
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
}
