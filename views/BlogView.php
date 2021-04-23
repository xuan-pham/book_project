<?php

class BlogView
{
    public function index($postss,$posts, $categoriesPosts,$settingItem)
    {
        require_once("templates/blog.php");
    }
    public function detail($post,$settingItem)
    {
        require_once("templates/blogDetail.php");
    }
    public function postByCategoryId($postItem, $categoriesPosts, $settingItem,$postss){
        require_once("templates/postByCategory.php");
    }
}