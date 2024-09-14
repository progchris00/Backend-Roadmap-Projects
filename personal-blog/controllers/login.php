<?php

require "views/login.view.php";

$config = require "local.config.php";

$db = new Database($config["database"]);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $user = $db->query("SELECT * FROM users WHERE username = :username", ["username" => $username])->find();

    if ($user["username"] == $username && $user["password"] == $password) {
        $_SESSION["isLogin"] = true;
        header("Location: /");
    } else if ($user["username"] == $username && $user["password"] != $password) {
        echo "Wrong password";
    } else {
        echo "User not found.";
    }
}
