<?php
class Database {
    private $host = "localhost";
    private $db_name = "sang5";
    private $username = "root";
    private $password = "";
    
    public $conn;

    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";port=3306;dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

         // Kiểm tra xem prepare() có hoạt động thành công hay không
        if ($this->conn->prepare("SELECT 1")) {
            echo "Kết nối thành công!";
        } else {
            echo "Kết nối không thành công!";
        }
        
        return $this->conn;
    }
}