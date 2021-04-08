<?php

class AdminView
{
    public function index()
    {
        require_once("templates/admin/dashboard.php");
    }

    public function login()
    {
        require_once("templates/admin/login.php");
    }

    public function logout()
    {
        require_once("templates/admin/logout.php");
    }
}