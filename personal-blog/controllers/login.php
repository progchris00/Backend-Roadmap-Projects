<?php

require "views/login.view.php";

$config = require "local.config.php";

$db = new Database($config["database"]);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $current_user = $db->query("SELECT * FROM users WHERE username = :username", ["username" => $username])->find();
    if ($current_user["username"] == $username && $current_user["password"] == $password) {
        $_SESSION["current_user"] = $current_user;
        $_SESSION["isLogin"] = true;
        header("Location: /");
    } else if ($current_user["username"] == $username && $current_user["password"] != $password) {
        echo "Wrong password";
    } else {
        echo "User not found.";
    }
}
