<?php
// Get all product
function getAllProducts()
{

    $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
    if (mysqli_connect_errno()) {
        log("eror");
        echo "Connect error" . mysqli_connect_error();
    }

    $result = $conn->query("SELECT * FROM product");
    return $result;

    $products = array();

    if ($result->num_rows > 0) {
        while ($category = mysqli_fetch_assoc($result)) {
            $products[] = $category;
        };
    }
    return $products;
}

// Prepare for remove

function getDeleteProduct($id)
{

    $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
    mysqli_set_charset($conn, "utf8");
    if (mysqli_connect_errno()) {
        echo "Connect error" . mysqli_connect_error();
    }

    $result = $conn->query(
        "DELETE FROM product WHERE id='$id'
            "
    );
    if ($result == true) {
        $_SESSION['success'] = "Sửa thành công";
        header("Location: /book_project/?action=admin-product");
    } else {
        session_start();
        $_SESSION['failed'] = "Thêm thất bại";;
    }
}
function getProduct($id)
{
    $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
    mysqli_set_charset($conn, "utf8");
    if (mysqli_connect_errno()) {
        echo "Connect error" . mysqli_connect_error();
    }

    $result = $conn->query(
        "SELECT * 
            FROM product  WHERE id = '$id'
            "
    );
    $editProducts = array();
    if ($result->num_rows > 0) {
        while ($edit = mysqli_fetch_assoc($result)) {
            $editProducts[] = $edit;
        };
    }
    return $editProducts;
}