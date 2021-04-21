<?php

class ProductView
{
    public function index($products, $categoriesSidebar, $settingItem)
    {
        require_once("templates/product.php");
    }

    public function detail($product,$settingItem)
    {
        require_once("templates/productDetail.php");
    }

    public function cart($settingItem)
    {
        require_once("templates/cart.php");
    }

    public function order($settingItem)
    {
        require_once("templates/checkout.php");
    }

     public function success($settingItem)
    {
        require_once("templates/success.php");
    }

     public function search($products, $categoriesSidebar,$settingItem)
    {
        // print_r($products);
        require_once("templates/search.php");
    }
}