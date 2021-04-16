<?php
    // Get all product
    function getAllPosts(){

        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        if (mysqli_connect_errno()) {
            log("eror");
            echo "Connect error" . mysqli_connect_error();
        }
      
        $result = $conn->query("SELECT * FROM post");
        return $result;

        $posts = array();

        if ($result->num_rows > 0) {
            while ($category = mysqli_fetch_assoc($result)) {
                $posts[] = $category;
            };
        }
        return $posts;
    }
    function getDeletePost($id)
    {

        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }

        $result = $conn->query(
            "DELETE FROM post WHERE id='$id'
            "
        );
        if ($result == true) {
            header("Location: /book_project/?action=admin-post");
        } else {
            echo "Xóa Thất Bại";
        }
    }
    function getPost($id)
    {
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }

        $result = $conn->query(
            "SELECT * 
            FROM post WHERE id = '$id'
            "
        );
        $editPosts = array ();
        if ($result->num_rows > 0) {
            while ($edit = mysqli_fetch_assoc($result)) {
                $editPosts[] = $edit;
            };
        }
        return $editPosts;
    }
