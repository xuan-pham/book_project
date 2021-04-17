<?php include('templates/admin/layouts/header.php'); ?>
<?php session_start(); ?>
<?php include 'models/admin/PostCategoryModel.php';  ?>
<div class="content-page">
    <div class="content">

        <div class="row">
            <div class="col-12 mx-auto p-5">
                <div class="card">

                    <div class="card-title text-center p-3 mx-auto">
                        <h3 class="font-weight-bold">Danh Sách Danh Mục Tin Tức</h3>
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
                                    <th scope="col" class="text-center">STT</th>
                                    <th scope="col" class="text-center">Tên Danh Mục</th>
                                    <th scope="col" class="text-center">Trạng Thái</th>
                                    <th scope="col" class="text-center">Chỉnh Sửa</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $num = 1;
                                $results = getAllPostCategory();

                                foreach ($results as $result) :
                                ?>
                                <tr>
                                    <th scope="row" class="text-center"><?= $num++ ?></th>
                                    <td class="text-center"><?= $result['name'] ?></td>

                                    <th scope="row" class="text-center">
                                        <?php
                                                if ($result['status'] == 1) {
                                                    echo '<span class="badge badge-success badge-pill p-2"> Hiện </span>';
                                                } else {
                                                    echo '<span class="badge badge-secondary badge-pill p-2"> Ẩn </span>';
                                                }
                                                ?>

                                    </th>



                                    <td class="text-center">
                                        <a href="?action=admin-edit-postCategory&PCed=<?= $result['id'] ?>"><i
                                                class="fa fa-edit" aria-hidden="true"></i></a>
                                        &ensp;
                                        <a onclick="return confirm('Bạn có muốn xóa?')"
                                            href="templates/admin/postCategory/deletePostCategory.php?PCid=<?= $result['id'] ?>"><i
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
if (isset($_SESSION['failed'])) {
    unset($_SESSION["failed"]);
} elseif (isset($_SESSION['success'])) {
    unset($_SESSION["success"]);
}
?>
<?php include('templates/admin/layouts/footer.php'); ?>