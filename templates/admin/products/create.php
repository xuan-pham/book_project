<?php include('templates/admin/layouts/header.php'); ?>
<style>
label.col-md-4.control-label {
    width: 239px;
}

.conten {
    margin-left: 27%;
}
</style>
<?php
 

    session_start();

    if (!isset($_SESSION['admin'])) {
        header('location: ?action=login');
    } ?>

<?php 


if (isset($_POST['btnSubmit'])) {
    $name = $_POST['name'];
    $status = $_POST['status'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $decription = $_POST['decription'];
    $detail = $_POST['detail'];
    $created_at = $_POST['created_at'];
    $updated_at = $_POST['updated_at'];
    $id_user = $_POST['id_user'];          
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
            status, price, decription, detail, id_user,
            id_productCategory, id_Author, id_Publisher, created_at,
            updated_at) 
        values('$name', '$fileName','$quantity', '$status',
            '$price', '$decription','$detail','$id_user','$id_productCategory',
           ' $id_Author','$id_Publisher','$created_at','$updated_at')");
$products = array();
    if ($product ->num_rows > 0) {
        while ($product = mysqli_fetch_assoc($result)) {
              $products[]=$result;
        }
        header('location:?action=index');
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
 
     
    <form class="form-horizontal" method="POST" enctype="multipart/form-data" >

        <fieldset>
            <!-- Form Name -->
            <legend>Thêm sản phẩm</legend>

            <!-- Tên Sản Phẩm-->
            <div class="conten">
                <div class="form-group">
                    <label class="col-md-4 control-label" for="product_name">Tên Sản Phẩm</label>
                    <div class="col-md-4">
                        <input id="name" name="name" class="form-control input-md" 
                            type="text">

                    </div>
                </div>

                <!-- Miêu tả sản phẩm-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="product_name_fr"> Miêu tả sản phẩm</label>
                    <div class="col-md-4">
                        <input id="product_name_fr" name="detail" class="form-control input-md"  type="text">

                    </div>
                </div>

                <!-- Loại sản phẩm -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="product_categorie"> Loại sản phẩm</label>
                    <div class="col-md-4">
                   
                        <select id="id_productCategory" name="id_productCategory" class="form-control">
                        <?php foreach($categoryList as $category)
                        echo '<option value="'.$category['id'].'">'.$category['name'].'</option>
                       ' ?>
                        
                        </select>
                    </div>
                </div>

                <!-- User -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="product_categorie">User</label>
                    <div class="col-md-4">
                   
                        <select id="id_productCategory" name="id_user" class="form-control">
                        <?php foreach($userList as $user)
                        echo '<option value="'.$user['id'].'">'.$user['lastName'].' '.$user['firstName'].'</option>
                       ' ?>
                        
                        </select>
                    </div>
                </div>

             <!-- id_author -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="product_categorie">Tác Giả</label>
                    <div class="col-md-4">
                   
                        <select id="id_Author" name="id_Author" class="form-control">
                        <?php foreach($authorList as $author)
                        echo '<option value="'.$author['id'].'">'.$author['lastName'].' '.$author['firstName'].'</option>
                       ' ?>
                        
                        </select>
                    </div>
                </div>

                <!-- publisher -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="id_Publisher">Nhà Xuất Bản</label>
                    <div class="col-md-4">
                   
                        <select id="id_Publisher" name="id_Publisher" class="form-control">
                        <?php foreach($publisherList as $publisher)
                        echo '<option value="'.$publisher['id'].'">'.$publisher['name'].' </option>
                       ' ?>
                        
                        </select>
                    </div>
                </div>

                <!-- Số lượng-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="quantity"> Số lượng</label>
                    <div class="col-md-4">
                        <input id="quantity" name="quantity" class="form-control input-md" required=""
                            type="number">

                    </div>
                </div>

                <!-- Giá tiền -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="available_quantity"> Giá tiền</label>
                    <div class="col-md-4">
                        <input id="price" name="price" class="form-control input-md" required=""
                            type="number">

                    </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="decription">Miêu tả chi tiết sản phẩm</label>
                    <div class="col-md-4">
                        <textarea class="form-control" id="decription" name="decription"></textarea>
                    </div>
                </div>

                <!-- Ngày thêm-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="online_date">Ngày thêm</label>
                    <div class="col-md-4">
                        <input id="created_at" name="created_at" class="form-control input-md" required=""
                            type="date">

                    </div>
                </div>

                <!-- Status -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="online_date">Status</label>
                    <div class="col-md-4">
                        <input id="status" name="status" class="form-control input-md" required=""
                            type="number">

                    </div>
                </div>

                <!-- Ngày cập nhật -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="online_date">Ngày cập nhật</label>
                    <div class="col-md-4">
                        <input id="updated_at" name="updated_at" class="form-control input-md" required=""
                            type="date">

                    </div>
                </div>

                <!-- Hình ảnh -->
                <div class="form-group">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Hình sản phẩm</label>
                            <div class="col-md-4">
                                <input id="image" name="image" class="input-file" type="file">
                            </div>
                        </div>
                          
                        <!-- Button -->
                        <div class="form-group">

                            <div class="col-md-4">
                                <input type="submit" id="btnSubmit" name="btnSubmit" value="Thêm Sản Phẩm" class="btn btn-primary"
                                    style="margin-left: 286%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </fieldset>
       
    </form>

    <?php include('templates/admin/layouts/footer.php'); ?>