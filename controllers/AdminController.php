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
    public function setting()
    {
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
        $loginView->addproducts();
    }
    public function delete()
    {
        $loginView = new AdminView();
        $loginView->delete();
    }
    public function deleteproduct()
    {
        $loginView = new AdminView();
        $loginView->deleteproduct();
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
}