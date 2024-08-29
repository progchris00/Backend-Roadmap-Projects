<?php

require "functions.php";

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($uri === "/" || $uri === "/home") {
    require "controllers/home.php";
} else if ($uri === "/result") {
    require "controllers/result.php";
} else {
    require "controllers/error.php";
}
