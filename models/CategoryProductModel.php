<?php

class CategoryProductModel
{
    public function getCategories()
    {
        // Connect database
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }

        $result = $conn->query("SELECT * FROM product_category");
        $categories = array();

        if ($result->num_rows > 0) {
            while ($category = mysqli_fetch_assoc($result)) {
                $categories[] = $category;
            };
        }
        return $categories;
    }
}