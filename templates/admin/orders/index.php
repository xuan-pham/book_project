<?php include('templates/admin/layouts/header.php'); ?>
<?php session_start(); ?>

<div class="content-page">
    <div class="content">
        <div class="row">
            <div class="col-12 mx-auto p-5">
                <div class="card">
                    <div class="card-title text-center p-3 mx-auto">
                        <h3 class="font-weight-bold"> Danh sách đơn hàng</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">STT</th>
                                    <th scope="col" class="text-center">Mã đơn hàng</th>
                                    <th scope="col" class="text-center">Tên khách hàng</th>
                                    <th scope="col" class="text-center">Địa chỉ</th>
                                    <th scope="col" class="text-center">Số điện thoại</th>
                                    <th scope="col" class="text-center">Email</th>
                                    <th scope="col" class="text-center">Ghi chú khách hàng</th>
                                    <th scope="col" class="text-center">Chi tiết</th>
                                    <th scope="col" class="text-center">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $num = 1;
                                foreach ($orderItem as $item) :
                                ?>
                                <tr>
                                    <th scope="row" class="text-center"><?= $num++ ?></th>
                                    <td class="text-center"><?= $item['id'] ?></td>
                                    <td class="text-center"><?= $item['lastname'] ?> <?= $item['firstname'] ?></td>
                                    <td class="text-center"><?= $item['address'] ?></td>
                                    <td class="text-center"><?= $item['phone'] ?></td>
                                    <td class="text-center"><?= $item['email'] ?></td>
                                    <td class="text-center"><?= $item['note'] ?></td>
                                    <td class="text-center"><a
                                            href="?action=admin-order-detail&odid=<?= $item['id'] ?>">Xem chi tiết</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="?action=admin-edit-order&oid=<?= $item['id'] ?>"><i class="fa fa-edit"
                                                aria-hidden="true"></i></a>
                                        <!-- <a onclick="return confirm('Bạn có muốn xóa?')" href="templates/admin/author/deleteAuthor.php?adid=<?= $item['id'] ?>"><i class="fa fa-trash" aria-hidden="true"></i></a> -->
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
<?php include('templates/admin/layouts/footer.php'); ?>