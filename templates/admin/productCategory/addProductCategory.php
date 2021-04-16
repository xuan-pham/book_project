<?php include('templates/admin/layouts/header.php'); ?>
<?php
$host = 'localhost';
$dbname = 'qlbansach';
$user = 'root';
$pass = '';
$conn = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
include "models/admin/ProductCategoryModel.php";

if (isset($_POST['bthSub'])) {
    $name = $_POST['name'];
    $status = $_POST['status'];
    $date = date('Y-m-d H:i:s');

    $DBH = new PDO('mysql:host=localhost;dbname=qlbansach', 'root', '');
    $query = "INSERT INTO product_category(name,status , created_at, updated_at) 
            VALUES
            ('$name','$status',now(), now())";
    $result = $DBH->exec($query);
    if ($result == true) {
        $_SESSION['success'] = "Thêm thành công";
        header("Location: ?action=admin-productCategory");
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
                        <h3 class="font-weight-bold">Thêm Danh Mục</h3>
                    </div>
                    <div class="card-body">
                        <div class="col-4 mx-auto">
                            <form action="" method="POST" target="_self">

                                <!-- Text input-->
                                <div class="form-group">
                                    <label for="name">Tên Danh Mục</label>

                                    <input id="name" name="name" placeholder="Tên danh mục..."
                                        class="form-control input-md" required="" type="text">
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="status">Trạng Thái</label>
                                    <div class="col-md-4">
                                        <select id="status" name="status" style="margin-left: -10px;
    margin-bottom: 10px;" class="form-control">
                                            <option value="1">Hoạt động</option>
                                            <option value="0">Tạm ngưng</option>
                                        </select>
                                    </div>
                                    <!-- Button -->
                                    <div class="form-group">
                                        <input type="submit" id="bthSub" style="margin-left: 3px;" name="bthSub"
                                            class="btn btn-primary" value="Thêm">
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('templates/admin/layouts/footer.php'); ?>