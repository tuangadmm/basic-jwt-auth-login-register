<?php

namespace Src\dao;

use PDO;

class Context
{
    private $conn;

    public function __construct()
    {
        try {
            $this->conn =  new \PDO(
                'mysql:host=' . Configs::SERVER_NAME . ';' . 'dbname=' . Configs::DB_NAME,
                Configs::DB_USERNAME,
                Configs::DB_PASSWORD,
                array(
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
                )
            );

        } catch (\PDOException  $e) {
            echo 'Connect failed: ' . $e->getMessage();
            die();
        }
    }

    public function getConnection(): \PDO
    {
        return $this->conn;
    }

    public function closeConnection(): void
    {
        $this->conn = null;
    }


}