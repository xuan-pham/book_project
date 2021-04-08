<?php

class AdminController
{

    public function index()
    {
       require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->index();
    }

    public function login(){
        require_once('views/admin/AdminView.php');
        $loginView = new AdminView();
        $loginView->login();
    }
}