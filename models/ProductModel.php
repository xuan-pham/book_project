<?php
class ProductModel
{
    public function getFeaturedProduct()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }
        $result = $conn->query(
            "SELECT * 
            FROM product
            WHERE featured = 1
            LIMIT 12
            "
        );
        $products = array();

        if ($result->num_rows > 0) {
            while ($product = mysqli_fetch_assoc($result)) {
                $products[] = $product;
            };
        }
        return $products;
    }

    public function getFeaturedProductDetail()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }
        $result = $conn->query(
            "SELECT * 
            FROM product
            WHERE featured = 1
            LIMIT 4
            "
        );
        $products = array();

        if ($result->num_rows > 0) {
            while ($product = mysqli_fetch_assoc($result)) {
                $products[] = $product;
            };
        }
        return $products;
    }

    public function getAllProducts()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }
        $result = $conn->query(
            "SELECT * 
            FROM product
            "
        );
        $products = array();

        if ($result->num_rows > 0) {
            while ($product = mysqli_fetch_assoc($result)) {
                $products[] = $product;
            };
        }
        return $products;
    }

    public function getProductByid($id)
    {
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }
        $result = $conn->query(
            "SELECT * 
            FROM product
            WHERE id = '$id'
            "
        );
        $product = mysqli_fetch_assoc($result);
        return $product;
    }

    public function orderProductByid($firstname, $lastname, $address, $phone, $email, $note)
    {
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }

        $sql = "INSERT INTO `order` (firstname,lastname,address,phone,email,note,created_at,updated_at)  VALUES('$firstname','$lastname','$address','$phone','$email','$note',now(),now())";


        if (mysqli_query($conn, $sql)) {
            $last_id = mysqli_insert_id($conn);

            foreach ($_SESSION['cart'] as $item) {
                $productId = $item['id'];
                $quantity = $item['quantity'];
                $price = $item['price'];
                $query = "INSERT INTO `order_detail` (order_id,product_id,quantity,price,created_at,updated_at) VALUES('$last_id','$productId','$quantity','$price',now(),now())";

                if (mysqli_query($conn, $query)) {
                    echo "ok";
                } else {
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                }
            }
            session_start();
            $_SESSION['success'] = "Thêm thành công";
            unset($_SESSION['cart']);
            header("Location: ?action=success");
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
    }

    public function search($key)
    {
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }
        $result = $conn->query(
            "SELECT * 
            FROM product
            WHERE name LIKE '%$key%'
            "
        );
        $products = array();
        if ($result->num_rows > 0) {
            while ($product = mysqli_fetch_assoc($result)) {
                $products[] = $product;
            };
        }
        return $products;
    }

    public function getProductByCategoryId($id){
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }
         $result = $conn->query(
            "SELECT * 
            FROM product
            WHERE id_productCategory = '$id'
            ");
        $products = array();
        if ($result->num_rows > 0) {
            while ($product = mysqli_fetch_assoc($result)) {
                $products[] = $product;
            };
        }
        return $products;
    }

     public function countProduct(){
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }
         $result = $conn->query(
            "SELECT id 
            FROM product
            ");
        $products = array();
        if ($result->num_rows > 0) {
            while ($product = mysqli_fetch_assoc($result)) {
                $products[] = $product;
            };
        }
        return $products;
    }

    public function countOrder(){
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }
         $result = $conn->query("SELECT id FROM `order`");
        $products = array();
        if ($result->num_rows > 0) {
            while ($product = mysqli_fetch_assoc($result)) {
                $products[] = $product;
            };
        }
        return $products;
    }

    public function countPost(){
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }
         $result = $conn->query(
            "SELECT id 
            FROM post
            ");
        $products = array();
        if ($result->num_rows > 0) {
            while ($product = mysqli_fetch_assoc($result)) {
                $products[] = $product;
            };
        }
        return $products;
    }
}