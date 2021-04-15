<?php

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
        $ornum = $_POST['ordinal_number'];
        $status = $_POST['status'];
        $update = $_POST['updated_at'];
        $publisherModel = new PublisherModel();
        $publisherItem = $pushlisherModel->editPublisher($id, $name, $ornum, $status, $update);
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
                        type="text" value="<?Php echo '' . $publisher['id'] . ''; ?>" disabled>

                </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Tên NXB</label>
                <div class="col-md-4">
                    <input id="name" name="name" placeholder="Tên NXB..." class="form-control input-md" required=""
                        type="text" value="<?Php echo '' . $publisher['name'] . ''; ?>">
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="ordinal_number">Số thứ tự</label>
                <div class="col-md-4">
                    <input id="ordinal_number" name="ordinal_number" placeholder="Số thứ tự..."
                        class="form-control input-md" required="" type="text"
                        value="<?Php echo '' . $publisher['ordinal_number'] . ''; ?>">
                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="status">Trạng Thái</label>
                <div class="col-md-4">
                    <select id="status" name="status" class="form-control">
                        <?php
                        if ($publisher['status'] == 1) {
                            echo '<option value="1" selected>Hoạt động</option>';
                            echo '<option value="0">Tạm ngưng</option>';
                        } else {
                            echo '<option value="1">Hoạt động</option>';
                            echo '<option value="0"selected>Tạm ngưng</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Ngày Cập Nhật</label>
                <div class="col-md-4">
                    <input id="updated_at" name="updated_at" placeholder="Tên NXB..." class="form-control input-md"
                        required="" type="date" value="<?Php echo '' . $publisher['updated_at'] . ''; ?>">
                    <input id="updated_at" name="updated_at" placeholder="Tên NXB..." class="form-control input-md"
                        required="" type="date">
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <div class="col-md-4">
                    <input type="submit" id="bthSub" name="bthSub" class="btn btn-primary" value="Lưu">
                </div>
            </div>
        </form>
    </div>
</div>