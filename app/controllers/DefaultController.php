<?php

class DefaultController{
    private $productModel;
    private $db;
    
    public function __construct()
    {
        $this->db = (new Database())->getConnection();
        $this->productModel = new ProductModel($this->db);
    }
    public function Index() {
        include_once 'app/views/share/index.php';
    }
}

