<?php 

 function getAllProductCategory(){
    // Connect database
    $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
    mysqli_set_charset($conn,"utf8");
    if (mysqli_connect_errno()) {
        echo "Connect error" . mysqli_connect_error();
    }

    $result = $conn->query("SELECT * FROM product_category");
    $productCategorys = array();

    if ($result->num_rows > 0) {
        while ($productCategory = mysqli_fetch_assoc($result)) {
            $productCategorys[] = $productCategory ;
        };
    }
    return $productCategorys;
}


 function deleteProductCategory($id)
   {
       $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
       mysqli_set_charset($conn, "utf8");
       if (mysqli_connect_errno()) {
           echo "Connect error" . mysqli_connect_error();
       }

       $result = $conn->query(
           "DELETE FROM product_category WHERE id='$id'
           "
       );

       if ($result == true) {
           session_start();
           $_SESSION['success'] = "Xóa thành công";
           header("Location: ../../../?action=admin-productCategory");
       } else {
           session_start();
           $_SESSION['failed'] = "Vui lòng xóa sản phẩm thuộc về danh mục này trước khi xóa danh mục";
           header("Location: ../../../?action=admin-productCategory");
       }
   }

 function getProductCategory($id)
    {
        // Connect database
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }

        $result = $conn->query("SELECT * FROM product_category WHERE id = '$id'");
        $productCategorys = array();

        if ($result->num_rows > 0) {
            while ($productCategory = mysqli_fetch_assoc($result)) {
                $productCategorys[] = $productCategory;
            };
        }
        return $productCategorys;
    }
    function editProductCategory($id, $name, $status, $update)
    {
        // Connect database 
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }
        $result = $conn->query("UPDATE product_category 
                    SET name = '$name', status = '$status', `updated_at` = '$update'
                    WHERE id = '$id'
                    ");
        if ($result == true) {
            session_start();
            $_SESSION['success'] = "Sửa thành công";
            header("Location: ?action=admin-productCategory");
        } else {
            $_SESSION['failed'] = "Sửa thất bại";
        }
    }