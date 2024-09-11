<?php

require "views/register.view.php";

$config = require "local.config.php";

$db = new Database($config["database"]);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_REQUEST["username"];
    $firstName = $_REQUEST["first-name"];
    $lastName = $_REQUEST["last-name"];
    $password = $_REQUEST["password"];

    $db->query(
        "INSERT INTO users (username, password, `first name`, `last name`, role, avatar) VALUES (:username, :firstName, :lastName, :password, :role, :avatar)",
        ["username" => $username, "firstName" => $firstName, "lastName" => $lastName, "password" => "$password", "role" => 1, "avatar" => "test"]
    );

    echo "success";
}
