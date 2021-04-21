<?php

class HomeView
{
    public function index($categoriesProduct, $categoriesSidebar, $banners, $blogItem, $productItem, $settingItem)
    {
        // print_r($categoriesProduct);die();
        require_once("templates/index.php");
    }
}