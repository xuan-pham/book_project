<?php

class PublisherModel
{

    public function getAllPublisher()
    {
        // Connect database
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }

        $result = $conn->query("SELECT * FROM publisher");
        $publishers = array();

        if ($result->num_rows > 0) {
            while ($publisher = mysqli_fetch_assoc($result)) {
                $publishers[] = $publisher;
            };
        }
        return $publishers;
    }
    public function getPublisherByID($id)
    {
        // Connect database
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }

        $result = $conn->query("SELECT * FROM publisher WHERE id = '$id'");
        $publishers = array();

        if ($result->num_rows > 0) {
            while ($publisher = mysqli_fetch_assoc($result)) {
                $publishers[] = $publisher;
            };
        }
        return $publishers;
    }
    public function editPublisher($id, $name, $status, $update)
    {
        // Connect database 
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }
        $result = $conn->query("UPDATE `publisher` 
                    SET `name` = '$name', `status` = '$status', `updated_at` = '$update'
                    WHERE `id` = '$id'
                    ");
        if ($result == true) {
            session_start();
            $_SESSION['success'] = "Sửa thành công";
            header("Location: http://localhost/book_project/?action=admin-publisher");
        } else {
            $_SESSION['failed'] = "Sửa thất bại";
        }
    }
    public function deletePB($id)
    {
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }

        $result = $conn->query(
            "DELETE FROM publisher WHERE id='$id'
            "
        );

        if ($result == true) {
            session_start();
            $_SESSION['success'] = "Xóa thành công";
            header("Location: ../../../?action=admin-publisher");
        } else {
            session_start();
            $_SESSION['failed'] = "Vui lòng xóa sản phẩm thuộc về danh mục này trước khi xóa danh mục";
            header("Location: ../../../?action=admin-publisher");
        }
    }
}
