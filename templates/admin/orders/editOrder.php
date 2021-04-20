<?php include('templates/admin/layouts/header.php');
include('models/admin/OrderModel.php');
$id = $_GET['oid'];
$orderModel = new OrderModel();
$orderItem = $orderModel->getOrderByID($id);
foreach ($orderItem as $order)
    if (isset($_POST['bthSub'])) {
        $id = $_POST['id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $note = $_POST['note'];
        $update = date('Y-m-d H:i:s');
        $orderModel = new OrderModel();
        $orderModel->editOrder($id, $firstname, $lastname, $address, $phone, $email, $note, $update);
    }
?>
<div class="content-page">
    <div class="content">
        <div class="row">
            <div class="col-12 mx-auto p-5">
                <div class="card">
                    <div class="card-title text-center p-3">
                        <h3 class="font-weight-bold">Sửa tác giả</h3>
                    </div>
                    <div class="card-body">
                        <div class="col-4 mx-auto">
                            <form action="" method="POST">
                                <input id="id" name="id" placeholder="Mã tác giả..." class="form-control input-md" type="hidden" value="<?Php echo '' . $order['id'] . ''; ?>">
                                <!-- Text input-->
                                <div class="form-group">
                                    <label for="firstnameLabel">Tên Khách Hàng</label>
                                    <input id="firstname" name="firstname" class="form-control input-md" type="text" value="<?Php echo '' . $order['firstname'] . ''; ?>">
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label for="lastnameLabel">Họ Khách Hàng</label>
                                    <input id="lastname" name="lastname" class="form-control input-md" type="text" value="<?Php echo '' . $order['lastname'] . ''; ?>">
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label for="lastnameLabel">Địa chỉ</label>
                                    <input id="address" name="address" class="form-control input-md" type="text" value="<?Php echo '' . $order['address'] . ''; ?>">
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label for="lastnameLabel">Số điện thoại</label>
                                    <input id="phone" name="phone" class="form-control input-md" type="text" value="<?Php echo '' . $order['phone'] . ''; ?>">
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label for="lastnameLabel">Email</label>
                                    <input id="email" name="email" class="form-control input-md" type="text" value="<?Php echo '' . $order['email'] . ''; ?>">
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label for="lastnameLabel">Ghi chú</label>
                                    <textarea id="note" name="note" class="form-control input-md"><?Php echo '' . $order['note'] . ''; ?></textarea>
                                </div>

                                
                                <!-- Button -->
                                <div class="form-group">
                                    <input type="submit" id="bthSub" name="bthSub" class="btn btn-primary" value="Lưu">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('templates/admin/layouts/footer.php'); ?>