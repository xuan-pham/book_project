<?php

class OrderModel
{

    public function getAllOrder()
    {
        // Connect database
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }

        $result = $conn->query("SELECT * FROM `order`");
        $orders = array();

        if ($result->num_rows > 0) {
            while ($order = mysqli_fetch_assoc($result)) {
                $orders[] = $order;
            };
        }
        return $orders;
    }
    public function getOrderByID($id)
    {
        // Connect database
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }

        $result = $conn->query("SELECT * FROM `order` WHERE `id` = '$id'");
        $orders = array();

        if ($result->num_rows > 0) {
            while ($order = mysqli_fetch_assoc($result)) {
                $orders[] = $order;
            };
        }
        return $orders;
    }
    public function editOrder($id, $firstname, $lastname, $address, $phone, $email, $note, $update)
    {
        // Connect database 
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }
        $result = $conn->query("UPDATE `order` 
                    SET `firstname` = '$firstname', `lastname` = '$lastname', `address` = '$address', `phone` = '$phone', `email` = '$email', `note` = '$note', `updated_at` = '$update'
                    WHERE `id` = '$id'
                    ");
        if ($result == true) {
            session_start();
            $_SESSION['success'] = "Sửa thành công";
            header("Location: http://localhost/book_project/?action=admin-order");
        } else {
            $_SESSION['failed'] = "Sửa thất bại";
        }
    }
}