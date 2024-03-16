<?php
class ProductModel{
    private $conn;
    private $table_name = "products";

    public function __construct($db) {
        $this->conn = $db;
    }

    function readAll() {
        // $query = "SELECT id, name, description, price FROM " . $this->table_name;
        $query = "SELECT * FROM students";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $query;
    }
}