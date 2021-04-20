<?php
class CategoryPostModel
{
    public function getCategoriesPosts()
    {

        // Connect database
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }

        $result = $conn->query(
            "SELECT * 
            FROM post_category
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
}