<?php


require "functions.php";


$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


$routes = [
    "/" => "controllers/home.php",
    "/home" => "controllers/home.php",
    "/result" => "controllers/result.php",
];
