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
    function getAllUser()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }

        $result = $conn->query(
            "SELECT * 
            FROM user 
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
    function getDelete($id)
    {

        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }

        $result = $conn->query(
            "DELETE FROM user WHERE id='$id'
            "
        );
        if ($result == true) {
            header("Location: /book_project/?action=userlist");
        } else {
            echo "Record does not delete try again";
        }
    }
    function getAddUser()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }

        $result = $conn->query(
            "INSERT INTO user(username, password, avatar, firstName, lastName, gender, phone, birthday, id_role, created_at, updated_at) VALUES()
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