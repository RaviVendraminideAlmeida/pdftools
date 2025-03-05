<?php

namespace Config;

use PDO, PDOException; 

class Connection
{
    private string $dsn = 'pgsql:host=postgres;dbname=pdftools;user=postgres;password=postdba';

    private Connection $connection = new Connection();

    public function __construct()
    {
        try {
            $this->pdo = new PDO($this->dsn);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getPDO()
    {
        return $this->pdo;
    }

}

