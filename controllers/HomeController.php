<?php

class HomeController
{

    public function index()
    {
        require_once('models/ProductModel.php');
        $productModel = new ProductModel();
        $categoryProduct = $productModel->getProduct();
        print_r($categoryProduct);
    }
}
