<?php include_once('templates/admin/layouts/header.php'); ?>

<?php session_start(); ?>
<div class="content-page">
    <div class="content">
        <div class="row">
            <div class="col-12 mx-auto p-5">
                <div class="card">
                    <div class="card-title text-center p-3 mx-auto">
                        <h3 class="font-weight-bold"> Danh Sách Thành Viên</h3>
                    </div>
                    <?php if (isset($_SESSION['failed'])) : ?>
                        <div class="col-md-12">
                            <div class="alert alert-danger mx-auto">
                                <p><?= $_SESSION['failed'] ?></p>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (isset($_SESSION['success'])) : ?>
                        <div class="col-md-12">
                            <div class="alert alert-success mx-auto">
                                <p><?= $_SESSION['success'] ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tài Khoản</th>
                                <th>Mật khẩu</th>
                                <th>Họ </th>
                                <th>Tên</th>
                                <th>Số Điện Thoại</th>
                                <th>Ngày Sinh</th>
                                <th>Giới Tính</th>
                                <th>Quyền</th>
                                <th>Ngày Thêm</th>
                                <th>Ngày Cập nhật</th>
                                <th>Chức Năng</th>

                            </tr>
                        </thead>
                        <?php
                        $host = 'localhost';
                        $dbname = 'qlbansach';
                        $user = 'root';
                        $pass = '';
                        $conn = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $user, $pass);
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $query = "SELECT * FROM user";
                        $result = $conn->query($query);
                        ?>
                        <?php foreach ($result as $users) : ?>
                            <tbody>
                                <tr>
                                    <th><?= $users['id'] ?></th>
                                    <th><?= $users['username'] ?></th>
                                    <th><?= $users['password'] ?></th>
                                    <th><?= $users['firstName'] ?></th>
                                    <th><?= $users['lastName'] ?></th>
                                    <th><?= $users['phone'] ?></th>
                                    <th><?= $users['birthday'] ?></th>
                                    <th><?= $users['gender'] ?></th>
                                    <th><?= $users['id_role'] ?></th>
                                    <th><?= $users['created_at'] ?></th>
                                    <th><?= $users['updated_at'] ?></th>
                                    <th>
                                        <a onclick="return confirm('Bạn có muốn xóa?')" href="templates/admin/users/delete.php?deleteId=<?= $users['id'] ?>">
                                            <i style="margin-right: 10px;" class="fa fa-trash" aria-hidden="true"></i></a>
                                        <a href="?action=fixuserId=<?= $users['id'] ?> "><i style="margin-left: 20px;" class="fa fa-edit" aria-hidden="true"></i></a>
                                    </th>
                                </tr>
                            </tbody>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
if (isset($_SESSION['failed'])) {
    unset($_SESSION["failed"]);
} elseif (isset($_SESSION['success'])) {
    unset($_SESSION["success"]);
}
?>
<?php include_once('templates/admin/layouts/footer.php'); ?>