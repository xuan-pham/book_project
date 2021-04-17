<?php include('templates/admin/layouts/header.php');
include('models/admin/PostCategoryModel.php');

if (isset($_REQUEST['PCed'])) {
    $id = $_GET['PCed'];
    $postCategorys = getPostCategory($id);
}

foreach ($postCategorys as $postCategory)
    if (isset($_POST['bthSub'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $status = $_POST['status'];
        $update = date('Y-m-d H:i:s');
        $postCategoryse = editPostCategory($id, $name, $status, $update);
    }
?>
<div class="content-page">
    <div class="content">
        <div class="row">
            <div class="col-12 mx-auto p-5">
                <div class="card">
                    <div class="card-title text-center p-3">
                        <h3 class="font-weight-bold">Sửa Danh Mục</h3>
                    </div>
                    <div class="card-body">
                        <div class="col-4 mx-auto">
                            <form action="" method="POST">
                                <input id="id" name="id" placeholder="Mã Danh Mục Tin Tức..."
                                    class="form-control input-md" required="" type="hidden"
                                    value="<?Php echo '' . $postCategory['id'] . ''; ?>">
                                <!-- Text input-->
                                <div class="form-group">
                                    <label for="nameLabel">Tên tác giả</label>
                                    <input id="name" name="name" placeholder="Tên danh mục..."
                                        class="form-control input-md" required="" type="text"
                                        value="<?Php echo '' . $postCategory['name'] . ''; ?>">
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="status">Trạng Thái</label>
                                    <div class="col-md-4">
                                        <select id="status" style="margin-left: -10px;
    margin-bottom: 10px;" name="status" class="form-control">
                                            <?php
                                            if ($postCategory['status'] == 1) {
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

                                <!-- Button -->
                                <div class="form-group">
                                    <input type="submit" style="margin-left: 3px;" id="bthSub" name="bthSub"
                                        class="btn btn-primary" value="Lưu">
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