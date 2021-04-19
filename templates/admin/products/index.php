<?php include('templates/admin/layouts/header.php'); ?>
<?php session_start(); ?>
<?php
include 'models/admin/ProductModel.php';
?>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
   <script src="ckeditor/ckeditor.js"></script>
</head>
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
                            <div class="alert  text-center alert-danger mx-auto">
                                <p><?= $_SESSION['failed'] ?></p>
                            </div>
                        </div>
                        <?php endif; ?>

                        <?php if (isset($_SESSION['success'])) : ?>
                        <div class="col-md-12">
                            <div class="alert text-center alert-success mx-auto">
                                <p><?= $_SESSION['success'] ?></p>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="card-body">
                            <table class="table table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Ảnh</th>
                                        <th>Tên</th>
                                        <th>Số Lượng</th>
                                        <th>Mô Tả</th>
                                        <th>Giá</th>
                                        <th>Chức Năng</th>
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
                                        <td><?= $result['price'] ?></td>
                                        <th scope="row" class="text-center">
                                        <?php
                                                if ($result['status'] == 1) {
                                                    echo '<span class="badge badge-success badge-pill p-2"> Hiện </span>';
                                                } else {
                                                    echo '<span class="badge badge-secondary badge-pill p-2"> Ẩn </span>';
                                                }
                                                ?>

                                  
                                        <td><?= $result['created_at'] ?></td>
                                        <td><?= $result['updated_at'] ?></td>                                    
                              
                                    <td class="text-center">
                                        <a href="?action=admin-edit-product&editProduct=<?= $result['id'] ?>"><i
                                                class="fa fa-edit" aria-hidden="true"></i></a>
                                        &ensp;
                                        <a onclick="return confirm('Bạn có muốn xóa?')"
                                            href="templates/admin/products/delete.php?deleteId=<?= $result['id'] ?>"><i
                                                class="fa fa-trash" aria-hidden="true"></i></a>
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