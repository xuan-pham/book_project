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
    public function addAuthor()
    {
        require_once("templates/admin/author/addAuthor.php");
    }
    public function editAuthor()
    {
        require_once("templates/admin/author/editAuthor.php");
    }
    public function deleteAuthor()
    {
        require_once("templates/admin/author/deleteAuthor.php");
    }
    public function setting($settingItem)
    {
        require_once("templates/admin/settings/index.php");
    }
    public function addSetting()
    {
        require_once("templates/admin/settings/addSetting.php");
    }
    public function editSetting()
    {
        require_once("templates/admin/settings/editSetting.php");
    }
    public function deleteSetting()
    {
        require_once("templates/admin/settings/deleteSetting.php");
    }
    public function userlist()
    {
        require_once("templates/admin/users/userlist.php");
    }
    public function delete()
    {
        require_once("templates/admin/delete.php");
    }

    public function fixuser()
    {
        require_once("templates/admin/users/fixuser.php");
    }
    public function adduser()
    {
        require_once("templates/admin/users/adduser.php");
    }
    //product
    public function productList()
    {
        require_once("templates/admin/products/index.php");
    }
    public function addproduct()
    {
        require_once("templates/admin/products/create.php");
    }
    public function editProduct()
    {
        require_once("templates/admin/products/edit.php");
    }
    //post
    public function PostList()
    {
        require_once("templates/admin/post/index.php");
    }
    public function addPost()
    {
        require_once("templates/admin/post/addpost.php");
    }
    public function editPost()
    {
        require_once("templates/admin/post/editpost.php");
    }
    public function productCategoryList()
    {
        require_once("templates/admin/productCategory/index.php");
    }
    public function addProductCategory()
    {
        require_once("templates/admin/productCategory/addProductCategory.php");
    }
    public function editProductCategory()
    {
        require_once("templates/admin/productCategory/editProductCategory.php");
    }
    public function postCategoryList()
    {
        require_once("templates/admin/postCategory/index.php");
    }
    public function addPostCategory()
    {
        require_once("templates/admin/postCategory/addPostCategory.php");
    }
    public function editPostCategory()
    {
        require_once("templates/admin/postCategory/editPostCategory.php");
    }
}