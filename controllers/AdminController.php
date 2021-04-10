<?php

class AdminController
{

    public function index()
    {
        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
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
    public function userlist()
    {
        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->userlist();
    }
    public function delete()
    {
        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->delete();
    }
}