<?php

class AdminController
{

    public function index()
    {
        require_once('views/admin/AdminView.php');
        $loginView =  new AdminView();
        $loginView->index();

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

    public function publisher(){
        require_once('models/PublisherModel.php');
        $publisherModel = new PublisherModel();
        $publisherItem = $publisherModel->getAllPublisher();


        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->publisher($publisherItem);
    }

    public function author(){
        require_once('models/AuthorModel.php');
        $auhtorModel = new AuthorModel();
        $auhtorItem = $auhtorModel->getAllAuthor();

        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->author($auhtorItem);
    }

    public function setting(){
        require_once('models/SettingModel.php');
        $settingModel = new SettingModel();
        $settingItem = $settingModel->getAllSetting();

        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->setting($settingItem);
    }
    public function userlist()
    {
        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->userlist();
    }
    public function products()
    {
        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->products();
    }
    public function addproducts()
    {
        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->addproducts();
    } public function delete()
    {
        
    
    }

}