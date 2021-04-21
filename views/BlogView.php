<?php

class BlogView
{
    public function index($posts, $categoriesPosts,$settingItem)
    {
        require_once("templates/blog.php");
    }
    public function detail($post,$settingItem)
    {
        require_once("templates/blogDetail.php");
    }
}