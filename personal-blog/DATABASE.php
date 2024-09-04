<?php

require "database.config.php";


class Database
{
    public $connection;


    public function __construct()
    {
        // Set the character set to UTF8. For encoding purposes.
        $dsn = "mysql:host=localhost;dbname=test_db;charset=utf8mb4";

        $this->connection = new PDO($dsn, DATABASE_USERNAME, DATABASE_PASSWORD);
        $this->connection->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }
}
