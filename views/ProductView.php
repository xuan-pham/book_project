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

    public function cart()
    {
        require_once("templates/cart.php");
    }

    public function order()
    {
        require_once("templates/checkout.php");
    }

     public function success()
    {
        require_once("templates/success.php");
    }

     public function search($products, $categoriesSidebar)
    {
        // print_r($products);
        require_once("templates/search.php");
    }
}