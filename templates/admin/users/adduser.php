<?php include_once('templates/admin/layouts/header.php'); ?>
<?php
$host = 'localhost';
$dbname = 'qlbansach';
$user = 'root';
$pass = '';
$conn = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if (isset($_POST['bthSub'])) {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $birthday = $_POST['birthday'];
    $role = $_POST['role'];
    $created = $_POST['created_at'];
    $update = $_POST['updated_at'];
    $image = $_FILES['image']['name'];
    $duong_dan_anh = 'templates/admin/images/Users/' . $image;
    move_uploaded_file($_FILES['image']['tmp_name'], $duong_dan_anh);
    md5($pass);
    $DBH = new PDO('mysql:host=localhost;dbname=qlbansach', 'root', '');
    $query = "INSERT INTO user(username,password,avatar,firstName,lastName,gender,phone,birthday,id_role,created_at,updated_at) 
        VALUES
         ('$username',md5('$pass'),'$image','$firstName','$lastName','$gender','$phone','$birthday','$role','$created','$update')";
    $result = $DBH->exec($query);
    if ($result == true) {
        echo '<script type="text/javascript">alert("Thêm Thành Công")</script>';
    } else {
        echo '<script type="text/javascript">alert("Thêm không Thành Công")</script>';
    }
}


?>
<div class="content-page">
    <div class="content">
        <form class="content" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <label for="exampleFormControlInput1">Họ</label>
                <input type="text" style="width: 40%;" name="first_name" class="form-control"
                    id="exampleFormControlInput1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Tên</label>
                <input type="text" style="width: 40%;" name="last_name" class="form-control"
                    id="exampleFormControlInput1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Tài Khoản</label>
                <input type="text" style="width: 40%;" name="username" class="form-control"
                    id="exampleFormControlInput1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Mật Khẩu</label>
                <input type="password" style="width: 40%;" name="pass" class="form-control"
                    id="exampleFormControlInput1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Giới Tính</label>
                <input type="gender" style="width: 40%;" name="gender" class="form-control"
                    id="exampleFormControlInput1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Số Điện Thoại</label>
                <input type="text" style="width: 40%;" name="phone" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Ngày Sinh</label>
                <input type="date" style="width: 40%;" name="birthday" class="form-control"
                    id="exampleFormControlInput1">
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Quyền</label>
                <select class="form-control" style="width: 40%;" name="role" id="exampleFormControlSelect1">
                    <option>Chọn Phân Quyền</option>
                    <option>1 Mastser</option>
                    <option>2 Product-Management</option>
                    <option>3 Post-Management</option>
                    <option>4 user</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Ngày Khởi Tạo</label>
                <input type="date" style="width: 40%;" name="created_at" class="form-control"
                    id="exampleFormControlInput1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Ngày Cập Nhật</label>
                <input type="date" style="width: 40%;" name="updated_at" class="form-control"
                    id="exampleFormControlInput1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Hình Ảnh</label>
                <input type="file" style="width: 40%;" name="image" class="form-control" id="exampleFormControlInput1">
            </div>
            <button class="sub" style="color: #fff;background-color: #2f999c;border-color:#2c9092"
                name="bthSub">Thêm</button>
        </form>
    </div>
</div>
<?php include_once('templates/admin/layouts/footer.php'); ?>