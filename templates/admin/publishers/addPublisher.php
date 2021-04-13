<?php include_once('templates/admin/layouts/header.php'); ?>
<?php
$host = 'localhost';
$dbname = 'qlbansach';
$user = 'root';
$pass = '';
$conn = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
include "models/PublisherModel.php";

if (isset($_POST['bthSub'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $ornum = $_POST['ordinal_number'];
    $status = $_POST['status'];
    $created = $_POST['created_at'];
    $update = $_POST['updated_at'];

    $DBH = new PDO('mysql:host=localhost;dbname=qlbansach', 'root', '');
    $query = "INSERT INTO publisher(id, name, ordinal_number, status, created_at, updated_at) 
            VALUES
            ('$id','$name','$ornum', '$status','$created','$update')";
    $result = $DBH->exec($query);
    if ($result == true) {
        header("Location: http://localhost/book_project/?action=admin-publisher");
    } else {
        echo "bad";
    }
}


?>
<div class="content-page">
    <div class="content">
        <form action="" method="POST" target="_self">
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="id">Mã NXB</label>
                <div class="col-md-4">
                    <input id="id" name="id" placeholder="Mã NXB..." class="form-control input-md" required=""
                        type="text">

                </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Tên NXB</label>
                <div class="col-md-4">
                    <input id="name" name="name" placeholder="Tên NXB..." class="form-control input-md" required=""
                        type="text">
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="ordinal_number">Số thứ tự</label>
                <div class="col-md-4">
                    <input id="ordinal_number" name="ordinal_number" placeholder="Số thứ tự..."
                        class="form-control input-md" required="" type="text">
                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="status">Trạng Thái</label>
                <div class="col-md-4">
                    <select id="status" name="status" class="form-control">
                        <option value="1">Hoạt động</option>
                        <option value="0">Tạm ngưng</option>
                    </select>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Ngày Thêm</label>
                <div class="col-md-4">
                    <input id="created_at" name="created_at" placeholder="Tên NXB..." class="form-control input-md"
                        required="" type="date">
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Ngày Cập Nhật</label>
                <div class="col-md-4">
                    <input id="updated_at" name="updated_at" placeholder="Tên NXB..." class="form-control input-md"
                        required="" type="date">
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <div class="col-md-4">
                    <input type="submit" id="bthSub" name="bthSub" class="btn btn-primary" value="Thêm">
                </div>
            </div>
        </form>
    </div>
</div>
<?php include_once('templates/admin/layouts/footer.php'); ?>