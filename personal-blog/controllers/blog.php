<?php

$isPublic = 1;

$config = require "local.config.php";

$db = new Database($config["database"]);

$id = $_GET["id"];

$blog_post = $db->query("SELECT * FROM blogs WHERE id = :id", ["id" => $id])->fetch();

if (! $blog_post) {
    abort();
}

if ($blog_post["isPublic"] != $isPublic) {
    abort(Response::FORBIDDEN);
}


require "views/blog.view.php";
