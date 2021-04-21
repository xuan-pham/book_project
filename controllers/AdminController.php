<?php

class AdminController
{

    public function index()
    {
        require_once('models/ProductModel.php');
        $productModel = new ProductModel();
        $numberOfProduct = $productModel->countProduct();
        $numberOfOrder = $productModel->countOrder();
        $numberOfPost = $productModel->countPost();
        
        require_once('views/admin/AdminView.php');
        $loginView =  new AdminView();
        $loginView->index($numberOfProduct, $numberOfOrder, $numberOfPost);
    }

    public function login()
    {
        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->login();
    }

    public function logout()
    {
        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->logout();
    }
    //publisher
    public function publisher()
    {
        require_once('models/PublisherModel.php');
        $publisherModel = new PublisherModel();
        $publisherItem = $publisherModel->getAllPublisher();

        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->publisher($publisherItem);
    }

    public function addPublisher()
    {
        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->addPublisher();
    }
    public function deletePublisher()
    {
        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->deletePublisher();
    }
    public function editPublisher()
    {
        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->editPublisher();
    }
    //author
    public function author()
    {
        require_once('models/AuthorModel.php');
        $auhtorModel = new AuthorModel();
        $authorItem = $auhtorModel->getAllAuthor();

        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->author($authorItem);
    }
    public function addAuthor()
    {
        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->addAuthor();
    }
    public function editAuthor()
    {
        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->editAuthor();
    }
    public function deleteAuthor()
    {
        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->deleteAuthor();
    }
    //setting
    public function setting()
    {
        require_once('models/SettingModel.php');
        $settingModel = new SettingModel();
        $settingItem = $settingModel->getAllSetting();

        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->setting($settingItem);
    }
    public function addSetting()
    {
        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->addSetting();
    }
    public function editSetting()
    {
        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->editSetting();
    }
    public function deleteSetting()
    {
        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->deleteSetting();
    }
    //user
    public function userlist()
    {
        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->userlist();
    }
    public function delete()
    {
        $loginView = new AdminView();
        $loginView->delete();
    }
    public function fixuser()
    {
        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->fixuser();
    }
    public function adduser()
    {
        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->adduser();
    }

    //end user

    //product
    public function productList()
    {
        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->productList();
    }
    public function addproduct()
    {
        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->addproduct();
    }
    public function editProduct()
    {
        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->editProduct();
    }
    //end product

    //post
    public function PostList()
    {
        require_once("templates/admin/post/index.php");
    }
    public function addPost()
    {
        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->addPost();
    }
    public function editPost()
    {
        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->editPost();
    }
    // category
    public function productCategoryList()
    {
        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->productCategoryList();
    }
    public function addProductCategory()
    {
        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->addProductCategory();
    }
    public function editProductCategory()
    {
        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->editProductCategory();
    }
    public function postCategoryList()
    {
        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->postCategoryList();
    }
    public function addPostCategory()
    {
        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->addPostCategory();
    }
    public function editPostCategory()
    {
        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->editPostCategory();
    }
    public function order(){
        require_once('models/admin/OrderModel.php');
        $orderModel = new OrderModel();
        $orderItem = $orderModel->getAllOrder();

        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->order($orderItem);
    }
    public function editOrder(){
        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->editOrder();
    }
    public function orderDetail(){
        require_once('models/admin/OrderModel.php');
        $id = $_GET['odid'];
        $orderModel = new OrderModel();
        $orderItem = $orderModel->getOrderByID($id);

        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->orderDetail($orderItem);
    }

}