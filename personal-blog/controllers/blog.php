<?php

$isPublic = 1;

$config = require "local.config.php";

$db = new Database($config["database"]);

$id = $_GET["id"];

$blog_post = $db->query("SELECT * FROM blogs WHERE blog_id = :id", ["id" => $id])->findOrFail();

authorize($blog_post["blog_is_public"] == $isPublic);

require "views/blog.view.php";
