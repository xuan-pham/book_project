<?php include('templates/admin/layouts/header.php');
include('models/AuthorModel.php');
$id = $_GET['edid'];
$authorModel = new AuthorModel();
$authorItem = $authorModel->getAuthorByID($id);

foreach ($authorItem as $author)
    if (isset($_POST['bthSub'])) {
        $id = $_POST['id'];
        $fullname = $_POST['fullname'];
        $gender = $_POST['gender'];
        $update = date('Y-m-d H:i:s');
        $authorModel = new AuthorModel();
        $authorModel->editauthor($id, $fullname, $gender, $update);
    }
?>
<div class="content-page">
    <div class="content">
        <div class="row">
            <div class="col-12 mx-auto p-5">
                <div class="card">
                    <div class="card-title text-center p-3">
                        <h3 class="font-weight-bold">Sửa tác giả</h3>
                    </div>
                    <div class="card-body">
                        <div class="col-4 mx-auto">
                            <form action="" method="POST">
                                    <input id="id" name="id" placeholder="Mã tác giả..." class="form-control input-md" required="" type="hidden" value="<?Php echo '' . $author['id'] . ''; ?>">
                                <!-- Text input-->
                                <div class="form-group">
                                    <label for="fullnameLabel">Tên tác giả</label>
                                    <input id="fullname" name="fullname" placeholder="Tên tác giả..." class="form-control input-md" required="" type="text" value="<?Php echo '' . $author['fullname'] . ''; ?>">
                                </div>

                                <!-- Select Basic -->
                                <div class="form-group">
                                    <label for="genderLabel">Giới tính</label>
                                    <select id="gender" name="gender" class="form-control">
                                        <?php
                                        if ($author['gender'] == 1) {
                                            echo '
                            <option value="1" selected>Nam</option>
                            <option value="0">Nữ</option>';
                                        } else {
                                            echo '
                            <option value="1">Nam</option>
                            <option value="0"selected>Nữ</option>';
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
<?php include('templates/admin/layouts/footer.php'); ?>