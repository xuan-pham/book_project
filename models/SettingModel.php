<?php

class SettingModel
{

    public function getAllSetting()
    {
        // Connect database
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }

        $result = $conn->query("SELECT * FROM setting");
        $settings = array();

        if ($result->num_rows > 0) {
            while ($setting = mysqli_fetch_assoc($result)) {
                $settings[] = $setting;
            };
        }
        return $settings;
    }
    public function getSettingByID($id)
    {
        // Connect database
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }

        $result = $conn->query("SELECT * FROM setting WHERE id = '$id'");
        $settings = array();

        if ($result->num_rows > 0) {
            while ($setting = mysqli_fetch_assoc($result)) {
                $settings[] = $setting;
            };
        }
        return $settings;
    }
    public function editSetting($id, $name, $image, $address, $phone, $email, $social, $update)
    {
        // Connect database 
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }
        $result = $conn->query("UPDATE `setting` 
                    SET `name` = '$name', `logo` = '$image', `address` = '$address', `phone` = '$phone', `email` = '$email', `social` = '$social', `updated_at` = '$update'
                    WHERE `id` = '$id'
                    ");
        if ($result == true) {
            session_start();
            $_SESSION['success'] = "Sửa thành công";
            header("Location: http://localhost/book_project/?action=admin-setting");
        } else {
            $_SESSION['failed'] = "Sửa thất bại";
        }
    }
    public function deleteSetting($id)
    {
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }

        $result = $conn->query(
            "DELETE FROM setting WHERE id='$id'
            "
        );

        if ($result == true) {
            session_start();
            $_SESSION['success'] = "Xóa thành công";
            header("Location: ../../../?action=admin-setting");
        } else {
            session_start();
            $_SESSION['failed'] = "Vui lòng xóa sản phẩm thuộc về danh mục này trước khi xóa danh mục";
            header("Location: ../../../?action=admin-setting");
        }
    }
}
