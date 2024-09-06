<?php

$config = require "local.config.php";

$db = new Database($config["database"]);

$public_blogs = $db->query("SELECT * FROM blogs INNER JOIN users ON blogs.authorID=users.id INNER JOIN role ON users.role=role.id WHERE blogs.isPublic=1;")->fetchAll();

require "views/home.view.php";
