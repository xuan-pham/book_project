<?php include('templates/admin/layouts/header.php'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <script src="templates/admin/products/ckeditor/ckeditor.js" type="text/javascript"></script>
<?php
session_start();
include('models/admin/ProductModel.php'); ?>

<?php
if (isset($_REQUEST['editProduct'])) {
    $id = $_GET['editProduct'];
    $editProducts = getProduct($id);
}
?>
<?php
foreach ($editProducts as $editProduct)
    if (isset($_POST['btnSub'])) {
        $id = $_POST['id'];
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
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }
        $result = $conn->query(
            "UPDATE product 
        SET name = '$name', quantity = '$quantity', status = '$status', price ='$price'  , decription ='$decription', detail ='$detail',
        id_productCategory ='$id_productCategory', id_Author = '$id_Author', 
        id_Publisher = '$id_Publisher', created_at = '$created_at', updated_at = '$updated_at' ,image='$fileName'
        WHERE id = '$id'
        "
        );
        if ($result == true) {
            $_SESSION['success'] = "Sửa thành công";
            header("Location: ?action=admin-product");
        } else {
            session_start();
            $_SESSION['failed'] = "Sửa thất bại";;
        }
    }
$conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
mysqli_set_charset($conn, "utf8");
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
                <div class="card-title text-center p-3">
                        <h3 class="font-weight-bold"> Sửa Sản Phẩm</h3>
                    </div>
                    <div class="card-body">
                    <div class="col-8 mx-auto">
                    <form class="form-horizontal" method="POST"  enctype="multipart/form-data">
                        <!-- Tên Sản Phẩm-->                  
                            <div class="form-group">                            
                                    <input id="product_name_fr"  name="id"
                                        class="form-control input-md"
                                        value="<?Php echo '' . $editProduct['id'] . ''; ?>" type="hidden">                         
                            </div>
                            <div class="form-group">
                                <label class=" control-label" for="product_name">Tên Sản Phẩm</label>
                                <div class="">
                                    <input id="name" name="name" class="form-control input-md" 
                                        type="text" value="<?Php echo '' . $editProduct['name'] . ''; ?>">

                                </div>
                            </div>

                            <!-- Miêu tả sản phẩm-->
                            <div class="form-group">
                                <label class=" control-label" for="product_name_fr"> Miêu tả sản phẩm</label>
                                <div class="">
                                <textarea name="decription" class="form-control" cols="54" id="decription"><?Php echo '' . $editProduct['decription'] . ''; ?></textarea>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" control-label" for="detail">Chi tiết sản phẩm</label>
                                <div class="">
                         
                                 <textarea  name="detail" id="detail"><?Php echo '' . $editProduct['detail'] . ''; ?></textarea>
                                 <script>CKEDITOR.replace('detail');</script>
                                </div>
                            </div>
                            <!-- Loại sản phẩm -->
                            <div class="form-group">
                                <label class=" control-label" for="product_categorie"> Loại sản phẩm</label>
                                <div class="">

                                    <select id="id_productCategory" name="id_productCategory" 
                                        class="form-control">
                                        <?php foreach ($categoryList as $category)
                                            echo '<option value="' . $category['id'] . '">' . $category['name'] . '</option>
                       ' ?>

                                    </select>
                                </div>
                            </div>


                            <!-- id_author -->
                            <div class="form-group">
                                <label class=" control-label" for="product_categorie">Tác Giả</label>
                                <div class="">

                                    <select id="id_Author" name="id_Author" class="form-control">
                                        <?php foreach ($authorList as $author)
                                            echo '<option value="' . $author['id'] . '">' . $author['fullname'] . ' </option>
                       ' ?>

                                    </select>
                                </div>
                            </div>

                            <!-- publisher -->
                            <div class="form-group">
                                <label class=" control-label" for="id_Publisher">Nhà Xuất Bản</label>
                                <div class="">

                                    <select id="id_Publisher" name="id_Publisher" 
                                        class="form-control">
                                        <?php foreach ($publisherList as $publisher)
                                            echo '<option value="' . $publisher['id'] . '">' . $publisher['name'] . ' </option>
                       ' ?>

                                    </select>
                                </div>
                            </div>

                            <!-- Số lượng-->
                            <div class="form-group">
                                <label class=" control-label" for="quantity"> Số lượng</label>
                                <div class="">
                                    <input id="quantity" name="quantity"
                                        value="<?Php echo '' . $editProduct['quantity'] . ''; ?>"
                                        class="form-control input-md"  required="" type="number">

                                </div>
                            </div>

                            <!-- Giá tiền -->
                            <div class="form-group">
                                <label class=" control-label" for="available_quantity"> Giá tiền</label>
                                <div class="">
                                    <input id="price" name="price"
                                        value="<?Php echo '' . $editProduct['price'] . ''; ?>"
                                        class="form-control input-md"  required="" type="number">

                                </div>
                            </div>
                            <!-- Status -->
                            <div class="form-group">
                                <label class=" control-label" for="status">Trạng Thái</label>
                                <div class="">
                                    <select id="status" name="status"  class="form-control">
                                        <?php
                                        if ($editProduct['status'] == 1) {
                                            echo '<option value="1" selected>Hoạt động</option>';
                                            echo '<option value="0">Tạm ngưng</option>';
                                        } else {
                                            echo '<option value="1">Hoạt động</option>';
                                            echo '<option value="0"selected>Tạm ngưng</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>



                            <!-- Hình ảnh -->


                            <div class="form-group">
                                <label class=" control-label" for="filebutton">Hình Ảnh</label>
                                <input type="file" id="image" name="image" style="width: 40%; margin-left: 13px;"
                                    required="" class="form-control input-md">
                            </div>

                            <!-- Button -->

                            <div class="form-group">
                                <input type="submit" id="btnSub" name="btnSub" style="margin-left: 14px;"
                                    class="btn btn-primary" value="Sửa">
                            </div>

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