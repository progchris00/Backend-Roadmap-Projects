<?php


$title = "Blogs";

$config = require "local.config.php";

$db = new Database($config["database"]);
$public_blogs = $db->query("SELECT *
FROM blogs
INNER JOIN users 
ON blogs.authorID=users.id
WHERE blogs.isPublic=1;")->fetchAll();

require "views/partials/head.php";
require "views/partials/nav.php";
require "views/partials/blog-contents.php";
require "views/partials/foot.php";
