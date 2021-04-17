<?php include_once('templates/admin/layouts/header.php');
?>
<?php session_start(); ?>

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
        $_SESSION['success'] = "Thêm thành công";
        header("Location: ?action=userlist");
    } else {
        session_start();
        $_SESSION['failed'] = "Thêm thất bại";;
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
                    <form class="content-first" method="POST" style="margin-left: 38%;" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Họ</label>
                            <input type="text" required="" style="width: 40%;" name="first_name" class="form-control"
                                placeholder=" Nhập họ">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tên</label>
                            <input type="text" required="" placeholder=" Nhập tên" style="width: 40%;" name="last_name"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tài Khoản</label>
                            <input type="text" required="" placeholder="Nhập tài Khoản" style="width: 40%;"
                                name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Mật Khẩu</label>
                            <input type="password" required="" placeholder="Nhập mật khẩu" style="width: 40%;"
                                name="pass" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Giới Tính</label>
                            <input type="gender" required="" placeholder="Nhập giới tính" style="width: 40%;"
                                name="gender" class="form-control">
                        </div>
                        <div class="form-group">
                            <lab for="exampleFormControlInput1">Số Điện Thoại</lab el>
                            <input type="text" required="" placeholder="Nhập số điện thoại" style="width: 40%;"
                                name="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Ngày Sinh</label>
                            <input type="date" required="" style="width: 40%;" placeholder="Chọn ngày sinh"
                                name="birthday" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Quyền</label>
                            <select class="form-control" required="" style="width: 40%;" name="role">
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
                        <div class="form-group">
                            <input type="submit" id="bthSub" name="bthSub" class="btn btn-primary" value="Thêm">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('templates/admin/layouts/footer.php'); ?>