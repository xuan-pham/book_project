<?php

class CategoryProductModel
{
    public function getCategoriresSideBar(){

         // Connect database
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn,"utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }

        $result = $conn->query(
            "SELECT * 
            FROM product_category
            limit 10
            "
        );
        $categories = array();

        if ($result->num_rows > 0) {
            while ($category = mysqli_fetch_assoc($result)) {
                $categories[] = $category;
            };
        }
        return $categories;

    }

    public function getCategoriesFeatured()
    {
        // Connect database
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn,"utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }

        $result = $conn->query(
            "SELECT * 
            FROM product_category
            WHERE featured = 1
            "
        );
        $categories = array();

        if ($result->num_rows > 0) {
            while ($category = mysqli_fetch_assoc($result)) {
                $categories[] = $category;
            };
        }
        return $categories;
    }
}