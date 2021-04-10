<?php include('templates/admin/layouts/header.php'); ?>
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Mã tác giả</th>
                        <th scope="col">Hình</th>
                        <th scope="col">Họ</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Giới Tính</th>
                        <th scope="col">Ngày Sinh</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($authorItem as $item) : ?>
                        <tr>
                            <th scope="row"><?= $item['id'] ?></th>
                            <td><?= $item['avatar'] ?></td>
                            <td><?= $item['firstName'] ?></td>
                            <td><?= $item['lastName'] ?></td>
                            <td><?= $item['gender'] ?></td>
                            <td><?= $item['birthday'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include('templates/admin/layouts/footer.php'); ?>