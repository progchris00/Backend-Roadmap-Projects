<?php

require "database.config.php";
require "router.php";

$pdo = new PDO("mysql:host=localhost;dbname=test_db", DATABASE_USERNAME, DATABASE_PASSWORD);
$pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);

$unbufferedResult = $pdo->query("SELECT * FROM users");
