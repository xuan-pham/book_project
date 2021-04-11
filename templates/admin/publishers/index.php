<?php include('templates/admin/layouts/header.php'); ?>
<?php session_start(); ?>

<div class="content-page">
    <div class="content">
        <div class="row">
            <div class="col-12 mx-auto p-5">
                <div class="card">
                    <div class="card-title text-center p-3 mx-auto">
                        <h3 class="font-weight-bold"> Thêm nhà xuất bản</h3>
                    </div>

                    <?php if (isset($_SESSION['failed'])): ?>
                    <div class="col-md-12">
                        <div class="alert alert-danger mx-auto">
                            <p><?= $_SESSION['failed'] ?></p>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if (isset($_SESSION['success'])): ?>
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
                                    <th scope="col" class="text-center">STT</th>
                                    <th scope="col" class="text-center">Tên NXB</th>
                                    <th scope="col" class="text-center">Trạng thái</th>
                                    <th scope="col" class="text-center">Chỉnh sửa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $num = 1;
                                foreach ($publisherItem as $item) : 
                                ?>
                                <tr>
                                    <th scope="row" class="text-center"><?= $num++ ?></th>
                                    <td class="text-center"><?= $item['name'] ?></td>
                                    <td class="text-center"><?= $item['status'] ?></td>
                                    <td class="text-center">
                                        <a href="templates/admin/publishers/editPublisher.php?edid=<?= $item['id'] ?> "><i
                                                class="fa fa-edit" aria-hidden="true"></i></a>
                                        <a onclick="return confirm('Bạn có muốn xóa?')"
                                            href="templates/admin/publishers/deletePublisher.php?pdid=<?= $item['id'] ?>"><i
                                                class="fa fa-trash" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
if(isset($_SESSION['failed'])){
    unset($_SESSION["failed"]);
}elseif (isset($_SESSION['success'])) {
    unset($_SESSION["success"]);
}
?>
<?php include('templates/admin/layouts/footer.php'); ?>