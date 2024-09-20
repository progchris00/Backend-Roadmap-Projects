<?php

$config = require "local.config.php";

$db = new Database($config["database"]);

$public_blogs = $db->query("SELECT * FROM blogs INNER JOIN users ON blogs.blog_author_id=users.user_id INNER JOIN roles ON users.user_role=roles.role_id WHERE blogs.blog_is_public=1;")->findAll();

require "views/home.view.php";
