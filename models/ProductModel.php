<?php
class ProductModel
{

    public function getFeaturedProduct(){
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn,"utf8");
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
}