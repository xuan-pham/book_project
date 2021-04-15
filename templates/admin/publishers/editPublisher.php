<?php include('templates/admin/layouts/header.php');
include('models/PublisherModel.php');
$id = $_GET['edid'];
$publisherModel = new PublisherModel();
$publisherItem = $publisherModel->getPublisherByID($id);

include "../../../models/PublisherModel.php";
if (isset($_REQUEST['edid'])) {
    $id = $_GET['edid'];
    $publisherModel = new PublisherModel();
    $publisherItem = $publisherModel->getPublisherByID($id);
}
foreach ($publisherItem as $publisher)
    if (isset($_POST['bthSub'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $status = $_POST['status'];
        $update = date('Y-m-d H:i:s');
        $publisherModel = new PublisherModel();
        $publisherModel->editPublisher($id, $name, $status, $update);
    }
?>
<div class="content-page">
    <div class="content">
        <div class="row">
            <div class="col-12 mx-auto p-5">
                <div class="card">
                    <div class="card-title text-center p-3">
                        <h3 class="font-weight-bold">Sửa nhà xuất bản</h3>
                    </div>
                    <div class="card-body">
                        <div class="col-4 mx-auto">
                            <form action="" method="POST">
                                    <input id="id" name="id" placeholder="Mã NXB..." class="form-control input-md" required="" type="hidden" value="<?Php echo '' . $publisher['id'] . ''; ?>">
                                <!-- Text input-->
                                <div class="form-group">
                                    <label for="name">Tên NXB</label>
                                    <input id="name" name="name" placeholder="Tên NXB..." class="form-control input-md" required="" type="text" value="<?Php echo '' . $publisher['name'] . ''; ?>">
                                </div>

                                <!-- Select Basic -->
                                <div class="form-group">
                                    <label for="statusLabel">Trạng Thái</label>
                                    <select id="status" name="status" class="form-control">
                                        <?php
                                        if ($publisher['status'] == 1) {
                                            echo '
                            <option value="1" selected>Hoạt động</option>
                            <option value="0">Tạm ngưng</option>';
                                        } else {
                                            echo '
                            <option value="1">Hoạt động</option>
                            <option value="0"selected>Tạm ngưng</option>';
                                        }
                                        ?>
                                    </select>
                                </div>

                                <!-- Button -->
                                <div class="form-group">
                                    <input type="submit" id="bthSub" name="bthSub" class="btn btn-primary" value="Lưu">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>