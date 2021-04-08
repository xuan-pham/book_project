<?php {

    function checkLogin($user, $pass)
    {
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }

        $result = $conn->query("SELECT id,username FROM user where username='$user' and password='$pass' ");
        $admin = array();

        if ($result->num_rows > 0) {
            while ($category = mysqli_fetch_assoc($result)) {
                $admin[] = $category;
            };
        }
        return $admin;
    }

    function getInfoOfUser($username)
    {
        // Connect database
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }

        $result = $conn->query(
            "SELECT * 
            FROM user 
            WHERE username = '$username'
            "
        );
        $users = array();

        if ($result->num_rows > 0) {
            while ($blog = mysqli_fetch_assoc($result)) {
                $users[] = $blog;
            };
        }
        return $users;
    }
}