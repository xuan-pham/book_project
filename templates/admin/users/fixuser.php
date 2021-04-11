<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../admin/css/fixuser.css">
    <title>Sửa thành viên</title>
</head>

<body>
    <?php
    include "../../../models/UserModel.php";
    ?>
    <div class="page-title-box">
        <h4 class="page-title">Sửa Thành Viên</h4>
        <div class="page-title-right">
            <div class="breadcrumb p-0 m-0">
                <span class="breadcrumb-item"><a href="/book_project/?action=dashboard">Velonic /</a></span>
                <span class="breadcrumb-item"><a href="#">Quản Lý Thành Viên /</a></span>
                <span class="breadcrumb-item"><a href="#">Danh Sách Thành Viên /</a></span>
                <span class="breadcrumb-item active">Sửa Thành Viên</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <?php
    if (isset($_REQUEST['fixuserId'])) {
        $id = $_GET['fixuserId'];
        $fixuser = getUser($id);
    }
    foreach ($fixuser as $user)

    ?>
    <?php
if (isset($_POST['bthSub'])) {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $brithday = $_POST['brithday'];
    $role = $_POST['role'];
    $created = $_POST['created_at'];
    $update = $_POST['updated_at'];
    $image = $_FILES['image']['name'];
    $duong_dan_anh = '../images/Users/' . $image;
    move_uploaded_file($_FILES['image']['tmp_name'], $duong_dan_anh);
    md5($pass);
    $fixusers = getUpdateUser($id, $firstName, $lastName, $username, md5($pass), $gender, $phone, $brithday, $role, $created, $update, $image);
}
    ?>
    <form class="content" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleFormControlInput1">Họ</label>
            <input type="text" name="first_name" class="form-control" id="exampleFormControlInput1"
                value="<?Php echo '' . $user['firstName'] . ''; ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Tên</label>
            <input type="text" name="last_name" class="form-control" id="exampleFormControlInput1"
                value="<?Php echo '' . $user['lastName'] . ''; ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Tài Khoản</label>
            <input type="text" name="username" class="form-control" id="exampleFormControlInput1"
                value="<?Php echo '' . $user['username'] . ''; ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Mật Khẩu</label>
            <input type="password" name="pass" class="form-control" id="exampleFormControlInput1"
                value="<?Php echo '' . $user['password'] . ''; ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Giới Tính</label>
            <input type="gender" name="gender" class="form-control" id="exampleFormControlInput1"
                value="<?Php echo '' . $user['gender'] . ''; ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Số Điện Thoại</label>
            <input type="text" name="phone" class="form-control" id="exampleFormControlInput1"
                value="<?Php echo '' . $user['phone'] . ''; ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Ngày Sinh</label>
            <input type="date" name="brithday" class="form-control" id="exampleFormControlInput1"
                value="<?Php echo '' . $user['birthday'] . ''; ?>">
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Quyền</label>
            <select class="form-control" name="role" id="exampleFormControlSelect1">
                <option>Chọn Phân Quyền</option>
                <option>1 Mastser</option>
                <option>2 Product-Management</option>
                <option>3 Post-Management</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Ngày Khởi Tạo</label>
            <input type="date" name="created_at" class="form-control" id="exampleFormControlInput1"
                value="<?Php echo '' . $user['created_at'] . ''; ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Ngày Cập Nhật</label>
            <input type="date" name="updated_at" class="form-control" id="exampleFormControlInput1"
                value="<?Php echo '' . $user['updated_at'] . ''; ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Hình Ảnh</label>
            <input type="file" name="image" class="form-control" id="exampleFormControlInput1">
        </div>
        <button class="sub" name="bthSub">Thay Đổi</button>
    </form>

</body>

</html>