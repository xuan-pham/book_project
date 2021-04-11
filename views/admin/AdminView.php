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
    public function addPublisher()
    {
        require_once("templates/admin/publishers/addPublisher.php");
    }
    public function deletePublisher()
    {
        require_once("templates/admin/publishers/deletePublisher.php");
    }
    public function editPublisher()
    {
        require_once("templates/admin/publishers/editPublisher.php");
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
        require_once("templates/admin/delete.php");

    }
    public function deleteproduct()
    {
        require_once("templates/admin/products/delete.php");

    }
    public function productList()
    {
        require_once("templates/admin/products/index.php");
    }
    public function addproduct()
    {
        require_once("templates/admin/products/create.php");

    }
    public function fixuser()
    {
        require_once("templates/admin/users/fixuser.php");
    }
    public function adduser()
    {
        require_once("templates/admin/users/adduser.php");
    }
    public function editProduct()
    {
        require_once("templates/admin/products/edit.php");
    }

}