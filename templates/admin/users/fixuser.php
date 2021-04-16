<?php
include_once('templates/admin/layouts/header.php');
include_once("models/UserModel.php");
?>
<?php session_start(); ?>
<?php
$action = $_REQUEST['action'];
preg_match_all('!\d+!', $action, $matches);

if (isset($matches[0][0])) {
    $id = $matches[0][0];
    $fixuser = getUser($id);
    foreach ($fixuser as $user);
}
?>
<?php
if (isset($_POST['bthSub'])) {
    $id = $_POST['id'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $brithday = $_POST['brithday'];
    $role = $_POST['role'];
    $created = date('Y-m-d H:i:s');
    $update = date('Y-m-d H:i:s');
    $image = $_FILES['image']['name'];
    $duong_dan_anh = 'templates/admin/images/Users/' . $image;
    move_uploaded_file($_FILES['image']['tmp_name'], $duong_dan_anh);
    md5($pass);
    $fixusers = getUpdateUser($id, $firstName, $lastName, $username, md5($pass), $gender, $phone, $brithday, $role, $created, $update, $image);
}
?>
<div class="content-page">
    <div class="content">
        <div class="row">
            <div class="col-12 mx-auto p-5">
                <div class="card">
                    <div class="card-title text-center p-3 mx-auto">
                        <h3 class="font-weight-bold"> Sửa thành viên</h3>
                    </div>
                    <form class="content" style="margin-left: 38%;" method="POST" enctype="multipart/form-data">

                        <input type="hidden" style="width: 40%;" name="id" class="form-control" id="id"
                            value="<?Php echo '' . $user['id'] . ''; ?>">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Họ</label>
                            <input type="text" style="width: 40%;" name="first_name" required="" class="form-control"
                                id="firstname" value="<?Php echo '' . $user['firstName'] . ''; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tên</label>
                            <input type="text" style="width: 40%;" name="last_name" required="" class="form-control"
                                id="lastname" value="<?Php echo '' . $user['lastName'] . ''; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tài Khoản</label>
                            <input type="text" style="width: 40%;" name="username" required="" class="form-control"
                                id="username" value="<?Php echo '' . $user['username'] . ''; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Mật Khẩu</label>
                            <input type="password" style="width: 40%;" name="pass" required="" class="form-control"
                                id="password" value="<?Php echo '' . $user['password'] . ''; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Giới Tính</label>
                            <input type="gender" style="width: 40%;" name="gender" required="" class="form-control"
                                id="gender" value="<?Php echo '' . $user['gender'] . ''; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Số Điện Thoại</label>
                            <input type="text" style="width: 40%;" name="phone" required="" class="form-control"
                                id="phone" value="<?Php echo '' . $user['phone'] . ''; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Ngày Sinh</label>
                            <input type="date" style="width: 40%;" name="brithday" required="" class="form-control"
                                id="birthday" value="<?Php echo '' . $user['birthday'] . ''; ?>">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Quyền</label>
                            <select class="form-control" required="" style="width: 40%;" name="role" id="role">
                                <option>Chọn Phân Quyền</option>
                                <option>1 Mastser</option>
                                <option>2 Product-Management</option>
                                <option>3 Post-Management</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Hình Ảnh</label>
                            <input type="file" required="" style="width: 40%;" name="image" class="form-control"
                                id="image">
                        </div>
                        <input type="submit" id="bthSub" name="bthSub" class="btn btn-primary" value="Thêm">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('templates/admin/layouts/footer.php'); ?>