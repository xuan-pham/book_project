<?php

class ProductView
{
    public function index($products, $categoriesSidebar)
    {
        require_once("templates/product.php");
    }

    public function detail($product)
    {
        require_once("templates/productDetail.php");
    }
}