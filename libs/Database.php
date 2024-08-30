<?php
class Database{
    private $connection;
    public function __construct(){
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];
        $this->connection = new PDO("mysql:host=127.0.0.1;dbname=adso_2696521","root","",$options);

        $this->connection->exec("SET CHARACTER SET UTF8");
    }

    public function getConnection()
    {
        return $this->connection;
    }

    public function closeConnection(){
        $this->connection = null;
    }
}