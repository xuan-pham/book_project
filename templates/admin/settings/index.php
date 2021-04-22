<?php include('templates/admin/layouts/header.php'); ?>


<div class="content-page">
    <div class="content">
        <div class="row">
            <div class="col-12 mx-auto p-5">
                <div class="card">
                    <div class="card-title text-center p-3 mx-auto">
                        <h3 class="font-weight-bold"> Danh sách cài đặt</h3>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">STT</th>
                                    <th scope="col" class="text-center">Tên</th>
                                    <th scope="col" class="text-center">Biểu tượng</th>
                                    <th scope="col" class="text-center">Địa chỉ</th>
                                    <th scope="col" class="text-center">Email</th>
                                    <th scope="col" class="text-center">Điện thoại</th>
                                    <th scope="col" class="text-center">Mạng xã hội</th>
                                    <th scope="col" class="text-center">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $num = 1;
                                foreach ($settingItem as $item) :?>
                                    <tr>
                                        <th scope="row" class="text-center"><?= $num++ ?></th>
                                        <td class="text-center"><?= $item['name'] ?></td>
                                        <td class="text-center"><?= $item['logo'] ?></td>
                                        <td class="text-center"><?= $item['address'] ?></td>
                                        <td class="text-center"><?= $item['email'] ?></td>
                                        <td class="text-center"><?= $item['phone'] ?></td>
                                        <td class="text-center"><?= $item['social'] ?></td>
                                        <td class="text-center">
                                            <a href="?action=admin-edit-setting&edid=<?= $item['id'] ?>"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                            <!-- <a onclick="return confirm('Bạn có muốn xóa?')" href="templates/admin/settings/deleteSetting.php?sdid=<?= $item['id'] ?>"><i class="fa fa-trash" aria-hidden="true"></i></a> -->
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
<?php include_once('templates/admin/layouts/footer.php'); ?>