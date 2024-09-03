<?php

require "database.config.php";


class Database
{
    public function query($query)
    {
        $dsn = "mysql:host=localhost;dbname=test_db;{DATABASE_USERNAME}";

        $database_handle = new PDO($dsn, DATABASE_USERNAME, DATABASE_PASSWORD);

        $database_handle->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);

        $statement = $database_handle->prepare($query);
        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}
