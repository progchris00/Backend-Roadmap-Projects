<?php

$config = require "local.config.php";

$db = new Database($config["database"]);

$username = $_POST["username"];

dd($username);
