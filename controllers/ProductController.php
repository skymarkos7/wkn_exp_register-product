<?php

require_once("models/ProductModel.php");

class ProductController
{
    public function getAllProducts()
    {
        echo"ssss";
        $productModel = new ProductModel();
        $products = $productModel->getAllProducts();

        print_r($products);
    }

    public function getProduct()
    {
        print_r("sss");
    }

    public function registerProduct()
    {
        print_r("registrado");
    }
    
}