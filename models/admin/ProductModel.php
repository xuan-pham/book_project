<?php
    // Get all product
    function getAllProducts(){

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
    function insertProduct($name,$image,$status,$quantity, $price,$decription,$detail){
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        $result = $conn->query("INSERT INTO product (name,image,status,quantity,price,description,detail) value ($name, $image, $status, $quantity, $price, $decription, $detail) ");

        if ($result->num_rows > 0) {
            while ($category = mysqli_fetch_assoc($result)) {
                $products[] = $category;
            };
        }
        
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }
        
        return $products;
    }
    
    // On Create

    if (isset($_POST['btnSubmit'])) {
        $name = $_POST['name'];
        $status = $_POST['status'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $decription = $_POST['decription'];
        $detail = $_POST['detail'];
        $created_at = $_POST['created_at'];
        $updated_at = $_POST['updated_at'];
        $id_user = $_POST['id_user'];          
        $id_Author = $_POST['id_Author'];
        $id_Publisher = $_POST['id_Publisher'];
        $id_productCategory = $_POST['id_productCategory'];
        
        $targetDir = "templates/images/products/";
        $fileName = basename($_FILES["image"]['name']);
        $targetFilePath = $targetDir . $fileName;
        move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);
        
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');

        $result = $conn->query(
            "INSERT INTO product ( name, image , quantity,
                status, price, decription, detail, id_user,
                id_productCategory, id_Author, id_Publisher, created_at,
                updated_at) 
            values('$name', '$fileName','$quantity', '$status',
                '$price', '$decription','$detail','$id_user','$id_productCategory',
               ' $id_Author','$id_Publisher','$created_at','$updated_at')");

        if ($result) {
            while ($product = mysqli_fetch_assoc($result)) {
                $products[] = $product;
            }
            header('location:?action=dashboard');
        }
    }
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
            header("Location: /book_project/?action=admin-product");
        } else {
            echo "Record does not delete try again";
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
        $editProduct = array ();
        if ($result->num_rows > 0) {
            while ($edit = mysqli_fetch_assoc($result)) {
                $editProduct[] = $edit;
            };
        }
        return $editProduct;
    }
    function UpdateProduct ($id, $name, $quantity, $status,
    $price, $decription, $detail, $id_user, $id_productCategory,
    $id_Author,$id_Publisher, $created_at, $updated_at)
    {
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }

        $result = $conn->query(
            "UPDATE `product` SET name='$name',status='$status',price='$price',quantity='$quantity',decription='$decription',detail=
            '$detail',created_at='$created_at',updated_at='$updated_at',id_user='$id_user',id_Author='$id_Author',id_Publisher='$id_Publisher',id_productCategory='$id_productCategory' WHERE id ='$id'"

        );
        $editProduct = array();

        if ($result == true) {
            header("Location: /book_project/?action=admin-add-product");
        } else {
            echo "Record does not delete try again";
        }
    }
 
?>
