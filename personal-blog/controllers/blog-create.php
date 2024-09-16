<?php

$config = require "local.config.php";

$db = new Database($config["database"]);



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $body = $_POST["body"];

    $db->query(
        "INSERT INTO blogs (title, body, isPublic, date, category, authorID, blogID) VALUES (:title, :body, :isPublic, :date, :category, :authorID, :blogID)",
        [
            "title" => $title,
            "body" => $body,
            "isPublic" => 1,
            "date" => "2024-09-14",
            "category" => "Technology",
            "authorID" => $_SESSION["current_user"]["id"],
            "blogID" => 5
        ]
    );
}

require "views/blog-create.view.php";
