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
    $name = $_POST['name'];
    $status = $_POST['status'];
    $date = date('Y-m-d H:i:s');

    $DBH = new PDO('mysql:host=localhost;dbname=qlbansach', 'root', '');
    $query = "INSERT INTO publisher(name, status, created_at, updated_at) 
            VALUES
            ('$name','$status',now(), now())";
    $result = $DBH->exec($query);
    if ($result == true) {
        $_SESSION['success'] = "Thêm thành công";
        header("Location: ?action=admin-publisher");
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
                    <div class="card-title text-center p-3">
                        <h3 class="font-weight-bold">Thêm nhà xuất bản</h3>
                    </div>
                    <div class="card-body">
                        <div class="col-4 mx-auto">
                            <form action="" method="POST" target="_self">

                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="name">Tên NXB</label>
                        <div class="col-md-4">
                            <input id="name" name="name" placeholder="Tên NXB..." class="form-control input-md"
                                required="" type="text">
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
                            <input id="created_at" name="created_at" placeholder="Tên NXB..."
                                class="form-control input-md" required="" type="date">
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <input type="submit" id="bthSub" name="bthSub" class="btn btn-primary" value="Thêm">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Button -->
    <div class="form-group">
        <input type="submit" id="bthSub" name="bthSub" class="btn btn-primary float-right" value="Thêm">
    </div>
    </form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php include_once('templates/admin/layouts/footer.php'); ?>