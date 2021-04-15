<?php include_once('templates/admin/layouts/header.php');
?>

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
    $created = date('Y-m-d H:i:s');
    $update = date('Y-m-d H:i:s');
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
        header('location: ?action=userlist');
        echo '<script type="text/javascript">alert("Thêm Thành Công")</script>';
    } else {
        echo '<script type="text/javascript">alert("Thêm không Thành Công")</script>';
    }
}


?>
<div class="content-page">
    <div class="content">
        <div class="row">
            <div class="col-12 mx-auto p-5">
                <div class="card">
                    <div class="card-title text-center p-3 mx-auto">
                        <h3 class="font-weight-bold"> Thêm Thành Viên</h3>
                    </div>
                    <form class="content-first" method="POST" style="margin-left: 38%;" enctype="multipart/form-data"
                        onsubmit="return validateForm()">

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Họ</label>
                            <input type="text" style="width: 40%;" name="first_name" id="firstname"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tên</label>
                            <input type="text" style="width: 40%;" name="last_name" id="lastname" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tài Khoản</label>
                            <input type="text" style="width: 40%;" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Mật Khẩu</label>
                            <input type="password" style="width: 40%;" name="pass" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Giới Tính</label>
                            <input type="gender" style="width: 40%;" name="gender" id="gender" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Số Điện Thoại</label>
                            <input type="text" style="width: 40%;" name="phone" id="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Ngày Sinh</label>
                            <input type="date" style="width: 40%;" name="birthday" id="birthday" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Quyền</label>
                            <select class="form-control" style="width: 40%;" id="role" name="role">
                                <option>Chọn Phân Quyền</option>
                                <option>1 Mastser</option>
                                <option>2 Product-Management</option>
                                <option>3 Post-Management</option>
                                <option>4 user</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Hình Ảnh</label>
                            <input type="file" style="width: 40%;" name="image" class="form-control">
                        </div>
                        <button class="sub" style="color: #fff;background-color: #2f999c;border-color:#2c9092;margin-left: 15%;
    margin-bottom: 2%;
    width: 10%;" name="bthSub">Thêm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    function validateForm() {
        var u = document.getElementById("username").value;
        var p = document.getElementById("password").value;
        var h = document.getElementById("firstname").value;
        var t = document.getElementById("lastname").value;
        var g = document.getElementById("gender").value;
        var n = document.getElementById("phone").value;
        var b = document.getElementById("birthday").value;
        var r = document.getElementById("role").value;
        if (u == "") {
            alert("Bạn chưa nhập tài khoản");
            return false;
        }
        if (p == "") {
            alert("Bạn chưa nhập mật khẩu");
            return false;
        }
        if (h == "") {
            alert("Bạn chưa nhập họ");
            return false;
        }
        if (t == "") {
            alert("Bạn chưa nhập tên");
            return false;
        }
        if (g == "") {
            alert("Bạn chưa nhập giới tính");
            return false;
        }
        if (n == "") {
            alert("Bạn chưa nhập số điện thoại");
            return false;
        }
        if (b == "") {
            alert("Bạn chưa nhập ngày sinh ");
            return false;
        }
        if (r == "") {
            alert("Bạn chưa chọn phân quyền");
            return false;
        }


        return true;
    }
    </script>
    <?php include_once('templates/admin/layouts/footer.php'); ?>