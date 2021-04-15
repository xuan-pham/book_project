<?php
class AuthorModel{
    public function getAllAuthor(){
         // Connect database
         $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
         mysqli_set_charset($conn,"utf8");
         if (mysqli_connect_errno()) {
             echo "Connect error" . mysqli_connect_error();
         }
 
         $result = $conn->query("SELECT * FROM author");
         $authors = array();
 
         if ($result->num_rows > 0) {
             while ($author = mysqli_fetch_assoc($result)) {
                 $authors[] = $author;
             };
         }
         return $authors;
    }
    public function getAuthorByID($id)
    {
        // Connect database
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }

        $result = $conn->query("SELECT * FROM author WHERE id = '$id'");
        $authors = array();

        if ($result->num_rows > 0) {
            while ($author = mysqli_fetch_assoc($result)) {
                $authors[] = $author;
            };
        }
        return $authors;
    }
    public function editAuthor($id, $fullname, $gender, $update)
    {
        // Connect database 
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }
        $result = $conn->query("UPDATE `author` 
                    SET `fullname` = '$fullname', `gender` = '$gender', `updated_at` = '$update'
                    WHERE `id` = '$id'
                    ");
        if ($result == true) {
            session_start();
            $_SESSION['success'] = "Sửa thành công";
            header("Location: http://localhost/book_project/?action=admin-author");
        } else {
            $_SESSION['failed'] = "Sửa thất bại";
        }
    }
    public function deleteAuthor($id)
    {
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }

        $result = $conn->query(
            "DELETE FROM author WHERE id='$id'
            "
        );

        if ($result == true) {
            session_start();
            $_SESSION['success'] = "Xóa thành công";
            header("Location: ../../../?action=admin-author");
        } else {
            session_start();
            $_SESSION['failed'] = "Vui lòng xóa sản phẩm thuộc về danh mục này trước khi xóa danh mục";
            header("Location: ../../../?action=admin-author");
        }
    }
}