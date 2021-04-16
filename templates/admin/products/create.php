<?php include('templates/admin/layouts/header.php'); ?>


<?php
if (isset($_POST['btnSubmit'])) {
    $name = $_POST['name'];
    $status = $_POST['status'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $decription = $_POST['decription'];
    $detail = $_POST['detail'];
    $created_at = date('m/d/Y h:i:s', time());
    $updated_at = date('m/d/Y h:i:s', time());
    $id_Author = $_POST['id_Author'];
    $id_Publisher = $_POST['id_Publisher'];
    $id_productCategory = $_POST['id_productCategory'];

    $targetDir = "templates/images/products/";
    $fileName = basename($_FILES["image"]['name']);
    $targetFilePath = $targetDir . $fileName;
    move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);

    $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');

    $result = $conn->query(
        "INSERT INTO product ( name, image , quantity,
            status, price, decription, detail,
            id_productCategory, id_Author, id_Publisher, created_at,
            updated_at) 
        values('$name', '$fileName','$quantity', '$status',
            '$price', '$decription','$detail','$id_productCategory',
           ' $id_Author','$id_Publisher','$created_at','$updated_at')"
    );
    if ($result == true) {
        $_SESSION['success'] = "Thêm thành công";
        header("Location: ?action=admin-product");
    } else {
        session_start();
        $_SESSION['failed'] = "Thêm thất bại";;
    }
}
$conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
if (mysqli_connect_errno()) {
    echo "Connect error" . mysqli_connect_error();
}
$categoryList = $conn->query("SELECT * FROM product_category");
$userList = $conn->query("SELECT * FROM user");
$publisherList = $conn->query("SELECT * FROM publisher");
$authorList = $conn->query("SELECT * FROM author");
?>


<div class="content-page">
    <div class="content">
        <div class="row">
            <div class="col-12 mx-auto p-5">
                <div class="card">
                    <div class="card-title text-center p-3 mx-auto">
                        <h3 class="font-weight-bold"> Thêm Sản Phẩm</h3>
                    </div>
                    <form class="content-first" method="POST" style="margin-left: 38%;" enctype="multipart/form-data">
                        <!-- Tên Sản Phẩm-->
                        <div class="conten">
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="product_name">Tên Sản Phẩm</label>
                                <div class="col-md-4">
                                    <input id="name" name="name" style="width: 130%;" required=""
                                        class="form-control input-md" type="text">

                                </div>
                            </div>

                            <!-- Miêu tả sản phẩm-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="product_name_fr"> Miêu tả sản phẩm</label>
                                <div class="col-md-4">
                                    <input id="product_name_fr" required="" style="width: 130%;" name="detail"
                                        class="form-control input-md" type="text">

                                </div>
                            </div>

                            <!-- Loại sản phẩm -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="product_categorie"> Loại sản phẩm</label>
                                <div class="col-md-4">

                                    <select id="id_productCategory" style="width: 130%;" name="id_productCategory"
                                        required="" class="form-control">
                                        <?php foreach ($categoryList as $category)
                                            echo '<option value="' . $category['id'] . '">' . $category['name'] . '</option>
                       ' ?>

                                    </select>
                                </div>
                            </div>


                            <!-- id_author -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="product_categorie">Tác Giả</label>
                                <div class="col-md-4">

                                    <select id="id_Author" name="id_Author" style="width: 130%;" required=""
                                        class="form-control">
                                        <?php foreach ($authorList as $author)
                                            echo '<option value="' . $author['id'] . '">' . $author['fullname'] . '</option>' ?>

                                    </select>
                                </div>
                            </div>

                            <!-- publisher -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="id_Publisher">Nhà Xuất Bản</label>
                                <div class="col-md-4">

                                    <select id="id_Publisher" required="" style="width: 130%;" name="id_Publisher"
                                        class="form-control">
                                        <?php foreach ($publisherList as $publisher)
                                            echo '<option value="' . $publisher['id'] . '">' . $publisher['name'] . ' </option>
                       ' ?>

                                    </select>
                                </div>
                            </div>

                            <!-- Số lượng-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="quantity"> Số lượng</label>
                                <div class="col-md-4">
                                    <input id="quantity" name="quantity" style="width: 130%;"
                                        class="form-control input-md" required="" type="number">

                                </div>
                            </div>

                            <!-- Giá tiền -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="available_quantity"> Giá tiền</label>
                                <div class="col-md-4">
                                    <input id="price" name="price" style="width: 130%;" class="form-control input-md"
                                        required="" type="text">

                                </div>
                            </div>

                            <!-- Textarea -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="decription">Miêu tả chi tiết sản phẩm</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" style="width: 130%;" id="decription"
                                        name="decription"></textarea>
                                </div>
                            </div>

                            <!-- Status -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="status">Trạng Thái</label>
                                <div class="col-md-4">
                                    <select id="status" name="status" style="width: 130%;" class="form-control">
                                        <option value="1">Hoạt động</option>
                                        <option value="0">Tạm ngưng</option>
                                    </select>
                                </div>
                            </div>


                            <!-- Hình ảnh -->


                            <div class="form-group">
                                <label class="col-md-4 control-label" for="filebutton">Hình Ảnh</label>
                                <input type="file" id="image" name="image" style="width: 40%; margin-left: 13px;"
                                    required="" class="form-control input-md">
                            </div>

                            <!-- Button -->

                            <div class="form-group">
                                <input type="submit" id="btnSubmit" style="margin-left: 14px;" name="btnSubmit"
                                    class="btn btn-primary" value="Thêm">
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('templates/admin/layouts/footer.php'); ?>