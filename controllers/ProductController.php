<?php

require_once("models/ProductModel.php");

class ProductController
{
    public function getAllProducts()
    {
        echo"ssss";
        $productModel = new ProductModel();
        $products = $productModel->getAllProducts();

        var_dump($products);
    }
    
}