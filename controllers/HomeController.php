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

        // Get product featured
        require_once('models/ProductModel.php');
        $productModel = new ProductModel();
        $productItem = $productModel->getFeaturedProduct();

                
        // Call view to return data 
        require_once('views/HomeView.php');
        $homeView = new HomeView();
        $homeView->index($categoryProduct,$categoriesSidebar, $bannerItem, $blogItem, $productItem);
    }

    public function blogs(){
        require_once('views/BlogView.php');
        $blogView = new BlogView();
        $blogView->index();
    }

    public function products(){
        require_once('views/ProductView.php');
        $productModel= new ProductView();
        $productModel->index();
    }
  
    public function contact(){
        require_once('views/ContactView.php');
        $blogView = new ContactView();
        $blogView->index();
    }
   

}
