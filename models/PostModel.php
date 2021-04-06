<?php

class PostModel
{
    public function getBlogAtHomePage()
    {
        // Connect database
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }

        $result = $conn->query(
            "SELECT * 
            FROM post
            limit 3
            "
        );
        $blogs = array();

        if ($result->num_rows > 0) {
            while ($blog = mysqli_fetch_assoc($result)) {
                $blogs[] = $blog;
            };
        }
        return $blogs;
    }
}