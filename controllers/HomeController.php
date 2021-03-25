<?php

class HomeController
{

    public function index()
    {
        require_once('models/CategoryProductModel.php');
        $categoriesProductModel = new CategoryProductModel();
        $categoryProduct = $categoriesProductModel->getCategories();

        require_once('views/HomeView.php');
        $categoryProductView = new HomeView();
        $categoryProductView->index($categoryProduct);
    }
}