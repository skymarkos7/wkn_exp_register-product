<?php

require_once("models/ProductTypeModel.php");

class ProductTypeController
{
    public function getAllTypes()
    {
        $typeModel = new ProductTypeModel();
        $productsType = $typeModel->getAllTypes();

        print_r($productsType);
    }

    public function registerType()
    {
        $type = new ProductTypeModel();
        $productTypeModel = $type->registerType();
        print_r($productTypeModel);
    }

    
    
}