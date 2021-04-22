<?php include('templates/admin/layouts/header.php');
include('models/admin/OrderDetailModel.php');
$id = $_GET['odid'];
$orderDetailModel = new OrderDetailModel();
$orderItem = $orderDetailModel->getOrderDetailByID($id);
foreach ($orderItem as $item)
?>

<div class="content-page">
    <div class="content">
        <div class="row">
            <div class="col-12 mx-auto p-5">
                <div class="card">
                    <div class="card-title text-center p-3 mx-auto">
                        <h3 class="font-weight-bold"> Chi tiết đơn hàng</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">STT</th>
                                    <th scope="col" class="text-center">Mã đơn hàng</th>
                                    <th scope="col" class="text-center">Tên khách hàng</th>
                                    <th scope="col" class="text-center">Tên sản phẩm</th>
                                    <th scope="col" class="text-center">Số lượng</th>
                                    <th scope="col" class="text-center">Đơn giá</th>
                                    <th scope="col" class="text-center">Tổng tiền</th>
                                    <!-- <th scope="col" class="text-center">Thao tác</th> -->
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
                                        <td class="text-center"><?= $item['firstname'] ?></td>
                                        <td class="text-center"><?= $item['name'] ?></td>
                                        <td class="text-center"><?= $item['quantity'] ?></td>
                                        <td class="text-center"><?= $item['price'] ?></td>
                                        <td class="text-center"><?= $item['quantity'] * $item['price'] ?></td>
                                        <!-- <td class="text-center">
                                            <a href="?action=admin-edit-author&edid=<?= $item['id'] ?>"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                            <a onclick="return confirm('Bạn có muốn xóa?')" href="templates/admin/author/deleteAuthor.php?adid=<?= $item['id'] ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        </td> -->
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