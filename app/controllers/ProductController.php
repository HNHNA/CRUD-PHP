<?php
class ProductController{
    public function Index() {

        $database = new Database();
        $db = $database->getConnection();

        $product = new ProductModel($db);
        
        $stmt = $product->readAll();

        // include_once 'app/views/share/header.php';
        include_once 'app/views/share/header.php';


    }
}