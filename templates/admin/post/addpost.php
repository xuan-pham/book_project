<?php include('templates/admin/layouts/header.php'); ?>

<?php
include_once('models/admin/PostModel.php');
?>

<?php
if (isset($_POST['btnSub'])) {
    $name = $_POST['title'];
    $description = $_POST['description'];
    $content = $_POST['content'];
    $id_PostCategory = $_POST['id_PostCategory'];

    $created_at = date('m/d/Y h:i:s', time());
    $updated_at = date('m/d/Y h:i:s', time());


    $targetDir = "templates/images/blogs/";
    $fileName = basename($_FILES["image"]['name']);
    $targetFilePath = $targetDir . $fileName;
    move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);

    $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
    mysqli_set_charset($conn, "utf8");

    $result = $conn->query(
        "INSERT INTO post ( title, image ,content, description,
              id_PostCategory, created_at,updated_at) 
        values('$name', '$fileName','$content',
            '$description','$id_PostCategory','$created_at','$updated_at')"
    );
    if ($result == true) {
        $_SESSION['success'] = "Thêm thành công";
        header("Location: ?action=admin-post");
    } else {
        session_start();
        $_SESSION['failed'] = "Thêm thất bại";;
    }
}
$conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
mysqli_set_charset($conn, "utf8");

if (mysqli_connect_errno()) {
    echo "Connect error" . mysqli_connect_error();
}

$categoryList = $conn->query("SELECT * FROM post_category");
$userList = $conn->query("SELECT * FROM user");
?>

<div class="content-page">
    <div class="content">
        <div class="row">
            <div class="col-12 mx-auto p-5">
                <div class="card">
                    <div class="card-title text-center p-3 mx-auto">
                        <h3 class="font-weight-bold"> Thêm Bài Viết</h3>
                    </div>
                    <form class="content-first" method="POST" style="margin-left: 38%;" enctype="multipart/form-data">


                        <!-- Tên Sản Phẩm-->

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="product_name">Tiêu Đề</label>
                            <div class="col-md-4">
                                <input id="name" name="title" style="width: 130%;" class="form-control input-md"
                                    type="text">

                            </div>
                        </div>

                        <!-- Miêu tả sản phẩm-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="product_name_fr">Mô Tả</label>
                            <div class="col-md-4">
                                <input id="product_name_fr" style="width: 130%;" name="content"
                                    class="form-control input-md" type="text">

                            </div>
                        </div>

                        <!-- Loại sản phẩm -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="post_categorie">Loại Bài Viết</label>
                            <div class="col-md-4">

                                <select id="id_postCategory" style="width: 130%;" name="id_PostCategory"
                                    class="form-control">
                                    <?php foreach ($categoryList as $category)
                                        echo '<option value="' . $category['id'] . '">' . $category['name'] . '</option>
                       ' ?>

                                </select>
                            </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="description">Chi Tiết</label>
                            <div class="col-md-4">
                                <textarea class="form-control" style="width: 130%;" id="description"
                                    name="description"></textarea>
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
                            <input type="submit" id="btnSubmit" style="margin-left: 14px;" name="btnSub"
                                class="btn btn-primary" value="Thêm">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('templates/admin/layouts/footer.php'); ?>