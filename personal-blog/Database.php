<?php

class Database
{
    public $connection;
    public $statement;

    public function __construct($config)
    {
        $dsn = "mysql:" . http_build_query($config, "", ";");

        $this->connection = new PDO($dsn, DATABASE_USERNAME, DATABASE_PASSWORD, [
            // Add an option when instantiating a PDO class
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

        // Using buffer when query. From documentation.
        $this->connection->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
    }

    public function query($query, $params = [])
    {
        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($params);

        return $this;
    }

    public function find()
    {
        return $this->statement->fetch();
    }

    public function findOrFail()
    {
        $result = $this->find();

        if (! $result) {
            abort();
        }

        return $result;
    }
}
