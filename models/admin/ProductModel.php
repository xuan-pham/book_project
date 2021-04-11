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

    // Delete a product
    function deleteProducts($id){
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }
         
        $result = $conn->query("DELETE product WHERE id = '$id'");
    
        header('location: index.php');
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
?>
