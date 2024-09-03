<?php

require "database.config.php";


class Database
{
    public $connection;


    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=test_db;{DATABASE_USERNAME}";

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
