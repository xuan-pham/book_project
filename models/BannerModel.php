<?php 

class BannerModel {
    
    public function getBannerOfHome(){
         // Connect database
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn,"utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }

        $result = $conn->query("SELECT * FROM banner");
        $banners = array();

        if ($result->num_rows > 0) {
            while ($banner = mysqli_fetch_assoc($result)) {
                $banners[] = $banner;
            };
        }
        return $banners;
        
    }
}