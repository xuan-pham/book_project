<?php

class HomeView
{
    public function index($categoriesProduct, $categoriesSidebar, $banners, $blogItem,$productItem)
    {
        // print_r($productItem);die();
        require_once("templates/index.php");
    }
}