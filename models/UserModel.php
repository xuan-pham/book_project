<?php

function checkLogin($user, $pass)
{
    $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
    mysqli_set_charset($conn,"utf8");

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
        $_SESSION['success'] = "Xoá thành công";
    } else {
        session_start();
        $_SESSION['failed'] = "Xoá thất bại";;
    }
}



function getUpdateUser($id, $firstName, $lastName, $username, $pass, $gender, $phone, $brithday, $role, $created, $update, $image)
{
    $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
    mysqli_set_charset($conn, "utf8");
    if (mysqli_connect_errno()) {
        echo "Connect error" . mysqli_connect_error();
    }

    $result = $conn->query(
        "UPDATE `user` SET username='$username',password='$pass',avatar='$image',firstName='$firstName',lastName='$lastName',gender=
            '$gender',phone='$phone',birthday='$brithday',id_role='$role',created_at='$created',updated_at='$update' WHERE id ='$id'"

    );

    if ($result == true) {
        $_SESSION['success'] = "Sửa thành công";
        header("Location: ?action=userlist");
    } else {
        session_start();
        $_SESSION['failed'] = "Sửa thất bại";;
    }
}

function getUser($id)
{
    $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
    mysqli_set_charset($conn, "utf8");
    if (mysqli_connect_errno()) {
        echo "Connect error" . mysqli_connect_error();
    }

    $result = $conn->query(
        "SELECT * 
            FROM user  WHERE id = '$id'
            "
    );
    $fixuser = array();

    if ($result->num_rows > 0) {
        while ($blog = mysqli_fetch_assoc($result)) {
            $fixuser[] = $blog;
        };
    }
    return $fixuser;
}