<?php include_once('templates/admin/layouts/header.php'); ?>
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Mã cài đặt</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Logo</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Email</th>
                        <th scope="col">Điện thoại</th>
                        <th scope="col">Mạng xã hội</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($settingItem as $item) : ?>
                    <tr>
                        <th scope="row"><?= $item['id'] ?></th>
                        <td><?= $item['name'] ?></td>
                        <td><?= $item['logo'] ?></td>
                        <td><?= $item['company'] ?></td>
                        <td><?= $item['address'] ?></td>
                        <td><?= $item['email'] ?></td>
                        <td><?= $item['phone'] ?></td>
                        <td><?= $item['social'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include_once('templates/admin/layouts/footer.php'); ?>