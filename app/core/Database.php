<?php

class Database{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db = DB_NAME;

    private $dbh;
    private $stmt;

    public function __construct()
    {
       $dsn = "mysql:host=$this->host;dbname=$this->db";

       $options = [
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
       ];

    }
}