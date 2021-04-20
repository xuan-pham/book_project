<?php

function getAllPostCategory()
{
    // Connect database
    $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
    mysqli_set_charset($conn, "utf8");
    if (mysqli_connect_errno()) {
        echo "Connect error" . mysqli_connect_error();
    }

    $result = $conn->query("SELECT * FROM post_category");
    $postCategorys = array();

    if ($result->num_rows > 0) {
        while ($postCategory = mysqli_fetch_assoc($result)) {
            $postCategorys[] = $postCategory;
        };
    }
    return $postCategorys;
}


function deletePostCategory($id)
{
    $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
    mysqli_set_charset($conn, "utf8");
    if (mysqli_connect_errno()) {
        echo "Connect error" . mysqli_connect_error();
    }

    $result = $conn->query(
        "DELETE FROM post_category WHERE id='$id'
           "
    );

    if ($result == true) {
        session_start();
        $_SESSION['success'] = "Xóa thành công";
        header("Location: ../../../?action=admin-postCategory");
    } else {
        session_start();
        $_SESSION['failed'] = "Vui lòng xóa sản phẩm thuộc về danh mục này trước khi xóa danh mục";
        header("Location: ../../../?action=admin-postCategory");
    }
}

function getPostCategory($id)
{
    // Connect database
    $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
    mysqli_set_charset($conn, "utf8");
    if (mysqli_connect_errno()) {
        echo "Connect error" . mysqli_connect_error();
    }

    $result = $conn->query("SELECT * FROM post_category WHERE id = '$id'");
    $postCategorys = array();

    if ($result->num_rows > 0) {
        while ($postCategory = mysqli_fetch_assoc($result)) {
            $postCategorys[] = $postCategory;
        };
    }
    return $postCategorys;
}
function editPostCategory($id, $name, $status, $update)
{
    // Connect database 
    $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
    mysqli_set_charset($conn, "utf8");
    if (mysqli_connect_errno()) {
        echo "Connect error" . mysqli_connect_error();
    }
    $result = $conn->query("UPDATE post_category 
                    SET name = '$name', status = '$status', `updated_at` = '$update'
                    WHERE id = '$id'
                    ");
    if ($result == true) {
        session_start();
        $_SESSION['success'] = "Sửa thành công";
        header("Location: ?action=admin-postCategory");
    } else {
        $_SESSION['failed'] = "Sửa thất bại";
    }
}