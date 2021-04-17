<?php include('templates/admin/layouts/header.php'); ?>
<?php session_start(); ?>
<?php
include 'models/admin/PostModel.php';
?>
<div class="content-page">
    <div class="content">
        <div class="row">
            <div class="col-12 mx-auto p-5">
                <div class="card">
                    <div class="card-title text-center p-3 mx-auto">
                        <h3 class="font-weight-bold"> Danh Sách Tin Tức</h3>
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
                                    <th>Tiêu Đề</th>
                                    <th>Ảnh</th>
                                    <th>Mô Tả</th>
                                    <th>Status</th>
                                    <th>Ngày Xuất Bản</th>
                                    <th>Ngày Cập Nhật</th>
                                    <th>Chức Năng</th>
                                </tr>
                            </thead>
                            <?php
                            $results = getAllPosts(); ?>
                            <?php foreach ($results as $result) : ?>
                            <tbody>




                                <tr>
                                    <td><?= $result['id'] ?></td>
                                    <td><?= $result['title'] ?></td>
                                    <td><img src="templates/images/blogs/<?= $result['image'] ?>" width="50px"
                                            height="50px"></td>
                                    <td><?= $result['description'] ?></td>
                                    <td><?= $result['created_at'] ?></td>
                                    <td><?= $result['updated_at'] ?></td>
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
                                            <a href="?action=admin-edit-post&editPost=<?= $result['id'] ?>"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                            <a onclick="return confirm('Bạn có muốn xóa?')" href="templates/admin/post/deletepost.php?deleteId=<?= $result['id'] ?>"><i class="fa fa-trash"  aria-hidden="true"></i></a>
                                        </td>
                                </tr>
                            </tbody>
                            <?php endforeach; ?>
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