<?php

require "functions.php";

$uri = $_SERVER['REQUEST_URI'];

if ($uri === "/") {
    require "controllers/home.php";
} else if ($uri === "/result") {
    require "controllers/result.php";
}
