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

    
    
}