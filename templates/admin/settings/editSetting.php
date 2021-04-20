<?php include('templates/admin/layouts/header.php');
include('models/SettingModel.php');
$id = $_GET['edid'];
$settingModel = new SettingModel();
$settingItem = $settingModel->getSettingByID($id);

foreach ($settingItem as $setting)
    if (isset($_POST['bthSub'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $logo = $_POST['logo'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $social = $_POST['social'];
        $update = date('Y-m-d H:i:s');
        $image = $_FILES['image']['name'];
        $duong_dan_anh = 'templates/admin/images/logo/' . $image;
        move_uploaded_file($_FILES['image']['tmp_name'], $duong_dan_anh);
        $settingModel = new SettingModel();
        $settingModel->editSetting($id, $name, $image, $address, $phone, $email, $social, $update);
    }
?>
<div class="content-page">
    <div class="content">
        <div class="row">
            <div class="col-12 mx-auto p-5">
                <div class="card">
                    <div class="card-title text-center p-3">
                        <h3 class="font-weight-bold">Sửa cài đặt</h3>
                    </div>
                    <div class="card-body">
                        <div class="col-4 mx-auto">
                            <form action="" method="POST">
                                <input id="id" name="id" placeholder="Mã cai dat..." class="form-control input-md" required="" type="hidden" value="<?Php echo '' . $setting['id'] . ''; ?>">

                                <!-- Text input-->
                                <div class="form-group">
                                    <label for="name">Tên cài đặt</label>

                                    <input id="name" name="name" placeholder="Tên cài đặt..." class="form-control input-md" required="" type="text" value="<?Php echo '' . $setting['name'] . ''; ?>">
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label for="logo">Biểu tượng</label>

                                    <input type="file" name="image" class="form-control"  value="<?Php echo '' . $setting['logo'] . ''; ?>">
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label for="address">Địa chỉ</label>

                                    <input id="address" name="address" placeholder="Địa chỉ..." class="form-control input-md" required="" type="text" value="<?Php echo '' . $setting['address'] . ''; ?>">
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label for="email">Email</label>

                                    <input id="email" name="email" placeholder="Email..." class="form-control input-md" required="" type="text" value="<?Php echo '' . $setting['email'] . ''; ?>">
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label for="phone">Điện thoại</label>

                                    <input id="phone" name="phone" placeholder="Điện thoại..." class="form-control input-md" required="" type="text" value="<?Php echo '' . $setting['phone'] . ''; ?>">
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label for="social">Mạng xã hội</label>

                                    <input id="social" name="social" placeholder="Mạng xã hội..." class="form-control input-md" required="" type="text" value="<?Php echo '' . $setting['social'] . ''; ?>">
                                </div>

                                <!-- Button -->
                                <div class="form-group">
                                    <input type="submit" id="bthSub" name="bthSub" class="btn btn-primary" value="Sửa">
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