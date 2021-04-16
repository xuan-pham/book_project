<?php include('templates/admin/layouts/header.php'); ?>
<?php session_start(); ?>
<?php
include 'models/admin/ProductModel.php';
?>
<div class="content-page">
    <div class="content">
        <div class="row">
            <div class="col-12 mx-auto p-5">
                <form action="" method="post">

                    <div class="card">
                        <div class="card-title text-center p-3 mx-auto">
                            <h3 class="font-weight-bold"> Danh Sách Sản Phẩm</h3>
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
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Ảnh</th>
                                        <th>Tên</th>
                                        <th>Số Lượng</th>
                                        <th>Mô Tả</th>
                                        <th>Chi Tiết</th>
                                        <th>Giá</th>
                                        <th>Ngày Xuất Bản</th>
                                        <th>Ngày Cập Nhật</th>
                                        <th>Chức Năng</th>
                                    </tr>
                                </thead>
                                <?php
                                $results = getAllProducts();
                                ?>
                                <?php foreach ($results as $result) : ?>

                                <tbody>
                                    <tr>
                                        <td><?= $result['id'] ?></td>
                                        <td><img src="templates/images/products/<?= $result['image'] ?>" width="50px"
                                                height="50px"></td>
                                        <td><?= $result['name'] ?></td>
                                        <td><?= $result['quantity'] ?></td>
                                        <td><?= $result['decription'] ?></td>
                                        <td><?= $result['detail'] ?></td>
                                        <td><?= $result['price'] ?></td>
                                        <td><?= $result['created_at'] ?></td>
                                        <td><?= $result['updated_at'] ?></td>
                                        <td>
                                            &ensp;
                                            <a onclick="return confirm('Bạn có muốn xóa?')"
                                                class="btn btn-outline-danger"
                                                href="templates/admin/products/delete.php?deleteId=<?= $result['id'] ?>"
                                                ;>
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                            &ensp;
                                            <a class="btn btn-outline-danger"
                                                href="?action=admin-edit-product&editProduct=<?= $result['id'] ?>">
                                                <i class="fas fa-cog"></i>
                                        </td>
                                    </tr>
                                </tbody>
                                <?php endforeach; ?>
                            </table>
                        </div>
                </form>
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
<?php include('templates/admin/layouts/footer.php'); ?>