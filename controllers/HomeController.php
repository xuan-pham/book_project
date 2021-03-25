<?php

class HomeController
{

    public function index()
    {
        // Goi category product model de lay du lieu 
        require_once('models/CategoryProductModel.php');
        $categoriesProductModel = new CategoryProductModel();
        $categoryProduct = $categoriesProductModel->getCategories();

        // Goi view de tra ve du lieu da lay 
        require_once('views/HomeView.php');
        $categoryProductView = new HomeView();
        $categoryProductView->index($categoryProduct);
    }
}