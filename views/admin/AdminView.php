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
    public function publisher($publisherItem)
    {
        require_once("templates/admin/publishers/index.php");
    }
    public function author($authorItem)
    {
        require_once("templates/admin/author/index.php");
    }
    public function setting($authorItem)
    {
        require_once("templates/admin/setting/index.php");
    }
    public function userlist()
    {
        require_once("templates/admin/users/userlist.php");
    }
    public function delete()
    {
        require_once("templates/admin/users/delete.php");
    }
    public function fixuser()
    {
        require_once("templates/admin/users/fixuser.php");
    }
    public function adduser()
    {
        require_once("templates/admin/users/adduser.php");
    }
}