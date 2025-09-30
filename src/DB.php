<?php
namespace App;

use PDO;
use PDOException;

class DB {
    private $conn;

    public function __construct()
    {
         try {
            $this->conn = new PDO("sqlite:db.sqlite");
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function all($table) {
        $stmt = $this->conn->prepare("SELECT * FROM $table");
        $stmt->execute();
        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
}