<?php

class HomeController
{

    public function index()
    {
        // Get data of categories featured
        require_once('models/CategoryProductModel.php');
        $categoriesProductModel = new CategoryProductModel();
        $categoryProduct = $categoriesProductModel->getCategoriesFeatured();
        
        // Get data of categories sidebar
        $categoriesSidebar = $categoriesProductModel->getCategoriresSideBar();


        // Get data of banners
        require_once('models/BannerModel.php');
        $bannerModel = new BannerModel();
        $bannerItem = $bannerModel->getBannerOfHome();

        // Get data of blogs
        require_once('models/PostModel.php');
        $blogModel = new PostModel();
        $blogItem = $blogModel->getBlogAtHomePage();
        
        // Call view to return data 
        require_once('views/HomeView.php');
        $categoryProductView = new HomeView();
        $categoryProductView->index($categoryProduct,$categoriesSidebar, $bannerItem, $blogItem);

    }
}