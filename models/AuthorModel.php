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
}