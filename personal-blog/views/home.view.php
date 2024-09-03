<?php


$title = "Blogs";

$db = new Database();
$public_blogs = $db->query("SELECT * FROM blogs WHERE isPublic = 1")->fetchAll(PDO::FETCH_ASSOC);

require "views/partials/head.php";
require "views/partials/nav.php";
require "views/partials/blog-contents.php";
