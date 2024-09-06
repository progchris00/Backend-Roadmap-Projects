<?php

$config = require "local.config.php";

$db = new Database($config["database"]);

$id = $_GET["id"];

$blog_post = $db->query("SELECT * FROM blogs WHERE id = :id", ["id" => $id])->fetch();

require "views/blog.view.php";
