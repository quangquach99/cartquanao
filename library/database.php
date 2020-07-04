<?php

class Dbh {
    private $host = "localhost";
    private $username = "root";
    private $password = "26644336aa";
    private $dbName = "donal";

    protected function connect() {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $pdo = new PDO($dsn,$this->username,$this->password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false );
        return $pdo;
    }
    public function getAllProducts() {
        $sql = "SELECT * FROM `products`";
        $stmt = $this->connect()->query($sql);
        $result = $stmt->fetchAll();

        return $result;
    }
    public function getProductById($product_id) {
        $sql = "SELECT * FROM `products` WHERE `product_id` = :product_id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':product_id',$product_id);
        $stmt->execute();
        $result = $stmt->fetch();

        return $result;
    }
}