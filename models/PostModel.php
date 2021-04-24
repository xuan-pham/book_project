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
    public function getCount(){
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        $sql ="SELECT * FROM post ";
        if ($result = mysqli_query($conn, $sql)) {
            $rowcount = mysqli_num_rows($result);

            return $rowcount;
        }
        return 0;


}

    public function getAllPosts()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }
        $result = $conn->query(
            "SELECT * 
            FROM post
            "
        );
        $posts = array();

        if ($result->num_rows > 0) {
            while ($post = mysqli_fetch_assoc($result)) {
                $posts[] = $post;
            };
        }
        return $posts;
       
    }

    public function getPostByid($id)
    {
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }
        $result = $conn->query(
            "SELECT * 
            FROM post
            WHERE id = '$id'
            "
        );
        $post = mysqli_fetch_assoc($result);
        return $post;
    }
    public function getCategoryPostByid($id_PostCategory)
    {
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }
        $result = $conn->query(
            "SELECT * 
            FROM post
            WHERE id_PostCategory = '$id_PostCategory'
            "
        );
        $post = mysqli_fetch_assoc($result);
        return $post;
    }
    public function getPostByCategoryId($id){
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }
         $result = $conn->query(
            "SELECT * 
            FROM post
            WHERE id_postCategory = '$id'
            ");
        $posts = array();
        if ($result->num_rows > 0) {
            while ($post = mysqli_fetch_assoc($result)) {
                $posts[] = $post;
            };
        }
        return $posts;
    }
    public function getthreePosts()
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
            ORDER BY RAND(20)
            limit 5
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
    public function getthreesPosts()
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
            ORDER BY RAND(20)
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
?>
