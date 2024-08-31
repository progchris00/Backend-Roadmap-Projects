<?php

$uri = $_SERVER["REQUEST_URI"];

$routes = [
    "/" => "controllers/home.php",
    "/login" => "controllers/login.php",
    "/register" => "controllers/register.php",
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
}
