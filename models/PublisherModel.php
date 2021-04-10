<?php 

class PublisherModel {
    
    public function getAllPublisher(){
        // Connect database
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn,"utf8");
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
    public function addPublisher($id, $name, $status, $ord_num){
        // Connect database
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn,"utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }

        $conn->query("INSERT INTO publisher 
                    VALUES(name = '$name', status = '$status', ordinal_number = '$ord_num')
                    WHERE id = '$id'
                    ");
    }
    public function editPublisher($id, $name, $status, $ord_num){
        // Connect database
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn,"utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }

        $conn->query("UPDATE publisher 
                    SET name = '$name', status = '$status', ordinal_number = '$ord_num' WHERE id = '$id'
                    ");
    }
    public function deletePublisher($id){
        // Connect database
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn,"utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }

        $conn->query("DELETE * 
                    FROM publisher 
                    WHERE id = '$id'
                    ");
        
    }
}