<?php

class Database
{
    private $conn;

    public function __construct()
    {
        $host = 'localhost';
        $port = 5432;
        $dbname = 'postgre_wkn';
        $user = 'user_wkn';
        $password = 'pass_wkn';

        try {
            $this->conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erro de conexão: " . $e->getMessage());
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }
}