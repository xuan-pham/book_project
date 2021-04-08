<?php

class AdminView
{
    public function index()
    {
        require_once("templates/admin/index.php");
    }

    public function login()
    {
        require_once("templates/admin/login.php");
    }
}