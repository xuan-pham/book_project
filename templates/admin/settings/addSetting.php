<?php include('templates/admin/layouts/header.php');
$host = 'localhost';
$dbname = 'qlbansach';
$user = 'root';
$pass = '';
$conn = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['bthSub'])) {
    $name = $_POST['name'];
    $logo = $_POST['logo'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $social = $_POST['social'];
    $date = date('Y-m-d H:i:s');

    $DBH = new PDO('mysql:host=localhost;dbname=qlbansach', 'root', '');
    $query = "INSERT INTO setting(name, logo, address, email, phone, social, created_at, updated_at) 
            VALUES
            ('$name','$logo','$address','$email','$phone','$social',now(), now())";
    $result = $DBH->exec($query);
    if ($result == true) {
        $_SESSION['success'] = "Thêm thành công";
        header("Location: ?action=admin-setting");
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
                        <h3 class="font-weight-bold">Thêm cài đặt</h3>
                    </div>
                    <div class="card-body">
                        <div class="col-4 mx-auto">
                            <form action="" method="POST" target="_self">
                                <!-- Text input-->
                                <div class="form-group">
                                    <label for="name">Tên cài đặt</label>

                                    <input id="name" name="name" placeholder="Tên cài đặt..." class="form-control input-md" required="" type="text">
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label for="logo">Biểu tượng</label>

                                    <input id="logo" name="logo" placeholder="Biểu tượng..." class="form-control input-md" required="" type="text">
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label for="address">Địa chỉ</label>

                                    <input id="address" name="address" placeholder="Địa chỉ..." class="form-control input-md" required="" type="text">
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label for="email">Email</label>

                                    <input id="email" name="email" placeholder="Email..." class="form-control input-md" required="" type="text">
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label for="phone">Điện thoại</label>

                                    <input id="phone" name="phone" placeholder="Điện thoại..." class="form-control input-md" required="" type="text">
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label for="social">Mạng xã hội</label>

                                    <input id="social" name="social" placeholder="Mạng xã hội..." class="form-control input-md" required="" type="text">
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
        </div>
    </div>
</div>
<?php include('templates/admin/layouts/footer.php'); ?>