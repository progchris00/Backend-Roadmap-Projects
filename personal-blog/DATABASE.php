<?php

require "database.config.php";


class Database
{
    public function query($value)
    {
        $dsn = "mysql:host=localhost;dbname=test_db;{DATABASE_USERNAME}";

        $database_handle = new PDO($dsn, DATABASE_USERNAME, DATABASE_PASSWORD);

        $database_handle->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);

        $result = $database_handle->query($value);

        return $result;
    }
}
