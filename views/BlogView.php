<?php

class BlogView
{
    public function index($posts, $categoriesPosts)
    {
        require_once("templates/blog.php");
    }
    public function detail($post)
    {
        require_once("templates/blogDetail.php");
    }
}