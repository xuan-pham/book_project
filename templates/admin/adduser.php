<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thêm thành viên</title>
</head>

<body>
    <?php
    if (isset($_POST['bthSub'])) {
        $firstName = $_POST['first_name'];
        $lastName = $_POST['first_name'];
        $user = $_POST['user_name'];
        $pass = $_POST['pass'];
        $phone = $_POST['phone'];
        $brithday = $_POST['brithday'];
        $gender = $_POST['gender'];
    }

    ?>
    <form action="" method="POST">

        <div class="form-group">
            <label>Họ</label>
            <input type="text" class="form-control" name="first_name">
        </div>

        <div class="form-group">
            <label>Tên</label>
            <input type="text" class="form-control" name="last_name">
        </div>

        <div class="form-group">
            <label>Tài Khoản</label>
            <input type="text" class="form-control" name="user_name">
        </div>

        <div class="form-group">
            <label>Mật Khẩu</label>
            <input type="text" class="form-control" name="pass">
        </div>

        <div class="form-group">
            <label>Số Điện Thoại</label>
            <input type="text" class="form-control" name="phone">
        </div>

        <div class="form-group">
            <label>Ngày Sinh</label>
            <input type="date" class="form-control" name="brithday">
        </div>

        <div class="form-group">
            <label>Giới Tính</label>
            <input type="text" class="form-control" name="gender">
        </div>

        <div class="form-group">
            <label>Ngày tạo</label>
            <input type="date" class="form-control" name="created_at">
        </div>

        <div class="form-group">
            <label>Cập Nhập Ngày</label>
            <input type="date" class="form-control" name="update_at">
        </div>

        <div class="form-group">
            <label>Quyền</label>

        </div>
        <select name="role">
            <option>--chọn quyền--</option>
            <?php
            for ($i = 1; $i <= 3; $i++) {
                echo '<option>' . $i . '</option>';
            }
            ?>
        </select>

        <div class="form-group">
            <label>Ảnh Đại Diện</label>
            <input type="file" class="form-control" name="image">
        </div>
        <button type="submit" name='btnSub'>Tạo</button>
    </form>

</body>

</html>