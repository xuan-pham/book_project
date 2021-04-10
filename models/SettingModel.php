<?php
class SettingModel{
    public function getAllsetting(){
         // Connect database
         $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
         mysqli_set_charset($conn,"utf8");
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
}