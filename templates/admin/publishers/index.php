    <?php include_once('templates/admin/layouts/header.php'); ?>
    <?php session_start(); ?>
    <div class="content-page">
        <div class="content">
            <div class="row">
                <div class="col-12 mx-auto p-5">
                    <div class="card">
                        <div class="card-title text-center p-3 mx-auto">
                            <h3 class="font-weight-bold"> Thêm nhà xuất bản</h3>
                        </div>

                        <?php if (isset($_SESSION['failed'])) : ?>
                        <div class="col-md-12">
                            <div class="alert alert-danger mx-auto">
                                <p><?= $_SESSION['failed'] ?></p>
                            </div>
                        </div>
                        <?php endif; ?>

                        <!-- Start Content-->
                        <div class="container-fluid">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Mã NXB</th>
                                        <th scope="col">Tên NXB</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col">Chỉnh sửa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($publisherItem as $item) : ?>
                                    <tr>
                                        <th scope="row"><?= $item['id'] ?></th>
                                        <td><?= $item['name'] ?></td>
                                        <td><?= $item['status'] ?></td>
                                        <td>
                                            <a
                                                href="templates/admin/publishers/editPublisher.php?edid=<?= $item['id'] ?> "><i
                                                    class="fa fa-edit" aria-hidden="true"></i></a>
                                            <a
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
                <?php include_once('templates/admin/layouts/footer.php'); ?>