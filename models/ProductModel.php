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

     public function orderProductByid($id,$quantity,$price,$firstname,$lastname,$address,$phone,$email,$note)
    {
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }
        // $query = 
        //     "SELECT * 
        //     FROM product
        //     WHERE id = '$id'
        //     "
        // ;
        // $result = $conn->query($query);
        $sql  ="INSERT INTO orders(id_Product,quantity,price,firstname,lastname,address,phone,email,note,created_at,updated_at) VALUES('$id','$quantity','$price','$firstname','$lastname','$address','$phone','$email','$note',now(),now())";
        if(mysqli_query($conn, $sql)){
            session_start();
            $_SESSION['success'] = "Thêm thành công";
            unset($_SESSION['cart']);
            header("Location: ?action=success");
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
 
        // if($result){
        //     while($result2 = $result->fetch_assoc()){
        //         print_r($result);die();
        //         $id = $result['id_Product'];
        //         $quantity = $result['quantity'];
        //         $price = $result['price'];
        //         $firstname = $result['firstname'];
        //         $lastname = $result['lastname'];
        //         $address = $result['address'];
        //         $phone = $result['phone'];
        //         $email = $result['email'];
        //         $note = $result['note'];
        //         $query_order = $conn->query(
        //             "INSERT INTO order(id_Product,quantity,price,firstname,lastname,address,phone,email,note) VALUES('$id','$quantity','$price','$firstname','$lastname','$address','$phone','$email','$note')
        //             "
        //         );
        //         print_r($query_order);die();
        //        if(mysqli_query($conn,$query_order)){
        //            echo "ok";
        //        }else{
        //            echo "failed";
        //        }
        //     }
        // }
        // return $product;
    }

    public function search($key){
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }
         $result = $conn->query(
            "SELECT * 
            FROM product
            WHERE name LIKE '%$key%'
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