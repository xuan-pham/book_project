<?php include('templates/admin/layouts/header.php'); ?>
<?php
$host = 'localhost';
$dbname = 'qlbansach';
$user = 'root';
$pass = '';
$conn = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
include "models/AuthorModel.php";

if (isset($_POST['bthSub'])) {
    $fullname = $_POST['fullname'];
    $gender = $_POST['gender'];
    $date = date('Y-m-d H:i:s');

    $DBH = new PDO('mysql:host=localhost;dbname=qlbansach', 'root', '');
    $query = "INSERT INTO author(fullname, gender, created_at, updated_at) 
            VALUES
            ('$fullname','$gender',now(), now())";
    $result = $DBH->exec($query);
    if ($result == true) {
        $_SESSION['success'] = "Thêm thành công";
        header("Location: ?action=admin-author");
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
                        <h3 class="font-weight-bold">Thêm tác giả</h3>
                    </div>
                    <div class="card-body">
                        <div class="col-4 mx-auto">
                            <form action="" method="POST" target="_self">

                                <!-- Text input-->
                                <div class="form-group">
                                    <label for="fullname">Tên tác giả</label>

                                    <input id="fullname" name="fullname" placeholder="Tên tác giả..." class="form-control input-md"
                                        required="" type="text">
                                </div>

                                <!-- Select Basic -->
                                <div class="form-group">
                                    <label for="gender">Giới tính</label>
                                    <select id="gender" name="gender" class="form-control">
                                        <option value="1">Nam</option>
                                        <option value="0">Nữ</option>
                                    </select>
                                </div>

                                <!-- Button -->
                                <div class="form-group">
                                    <input type="submit" id="bthSub" name="bthSub" class="btn btn-primary"
                                        value="Thêm">
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