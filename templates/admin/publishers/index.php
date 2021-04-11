<?php include('templates/admin/layouts/header.php'); ?>
<div class="content-page">
    <div class="content">

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
                            <a href="templates/admin/publishers/editPublisher.php?edid=<?= $item['id'] ?> "><i class="fa fa-edit" aria-hidden="true"></i></a>
                            <a href="templates/admin/publishers/deletePublisher.php?pdid=<?= $item['id'] ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include('templates/admin/layouts/footer.php'); ?>