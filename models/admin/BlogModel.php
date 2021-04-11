<?php
        function getAllPost(){

        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        if (mysqli_connect_errno()) {
            log("eror");
            echo "Connect error" . mysqli_connect_error();
        }
      
        $result = $conn->query("SELECT * FROM post");
        return $result;

        $blogs = array();

        if ($result->num_rows > 0) {
            while ($category = mysqli_fetch_assoc($result)) {
                $blogs[] = $category;
            };
        }
        return $blogs;
        }