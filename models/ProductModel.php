<?php
class ProductModel
{


    public function getProduct()
    {
        // Connect database
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }

        $query = $conn->query("SELECT * FROM product_category");
        return $data = $query->fetch_array();
    }

    public function getProductById($id)
    {
    }
}