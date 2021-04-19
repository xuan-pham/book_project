<?php include('templates/admin/layouts/header.php'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <script src="templates/admin/products/ckeditor/ckeditor.js" type="text/javascript"></script>
<?php
session_start();
include_once('models/admin/PostModel.php'); ?>
<?php
if (isset($_REQUEST['editPost'])) {
    $id = $_GET['editPost'];
    $editPosts = getPost($id);
}
?>
<?php

foreach ($editPosts as $editPost)
    if (isset($_POST['btnSub'])) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $content = $_POST['content'];
        $status = $_POST['status'];
        $id_PostCategory = $_POST['id_PostCategory'];
        $created_at = date('Y-m-d H:i:s');
        $updated_at = date('Y-m-d H:i:s');
        $targetDir = "templates/images/blogs/";
        $fileName = basename($_FILES["image"]['name']);
        $targetFilePath = $targetDir . $fileName;
        move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }

        $result = $conn->query(
            "UPDATE `post` SET title='title' ,image='$fileName',description='$description',content='$content',status='$status',id_PostCategory='$id_PostCategory',created_at='$created_at',updated_at='$updated_at' WHERE id ='$id'"
        );
        print_r($result);
        if ($result == true) {
            $_SESSION['success'] = "Sửa thành công";
            header("Location: ?action=admin-post");
        } else {

            $_SESSION['failed'] = "Sửa thất bại";
            header("Location: ?action=admin-post");
        }
    }
$conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
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
                    <div class="card-title text-center p-3">
                        <h3 class="font-weight-bold"> Sửa Bài Viết</h3>
                    </div>
                    <div class="card-body">
                    <div class="col-8 mx-auto">
                    <form class="form-horizontal"  method="POST" enctype="multipart/form-data">
                        <!-- Tên Sản Phẩm-->
                        <input type="hidden" name="id" 
                            value="<?Php echo '' . $editPost['id'] . ''; ?>">
                        <div class="form-group">
                            <label class="control-label" for="product_name">Tiêu Đề</label>
                            <div class="">
                                <input id="name" name="title" 
                                    value="<?Php echo '' . $editPost['title'] . ''; ?>" class="form-control input-md"
                                    type="text">
                            </div>
                        </div>
                        <!-- Miêu tả sản phẩm-->
                        <div class="form-group">
                            <label class=" control-label" for="product_name_fr">Mô Tả</label>
                            <div class="">
                                <input id="product_name_fr" name="content"
                                    class="form-control input-md" value="<?Php echo '' . $editPost['content'] . ''; ?>"
                                    type="text">

                            </div>
                        </div>

                        <!-- Loại sản phẩm -->
                        <div class="form-group">
                            <label class=" control-label" for="post_categorie">Loại Bài Viết</label>
                            <div class="">

                                <select id="id_postCategory" name="id_PostCategory" 
                                    class="form-control">
                                    <?php foreach ($categoryList as $category)
                                        echo '<option value="' . $category['id'] . '">' . $category['name'] . '</option>
                       ' ?>

                                </select>
                            </div>
                        </div>
                        <!---->

                        <div class="form-group">
                            <label class="control-label" for="post_categorie">Trạng Thái Bài viết</label>
                            <div class="">
                                <select name="status" class="form-control">
                                    <option>Chọn trạng thái</option>
                                    <option>1 hoạt động</option>
                                    <option>2 dừng hoạt động</option>
                                </select>
                            </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                                <label class=" control-label" for="detail">Chi tiết sản phẩm</label>
                                <div class="">
                         
                                 <textarea  name="description" class="form-control" id="description"><?Php echo '' . $editPost['description'] . ''; ?></textarea>
                                 <script>CKEDITOR.replace('description');</script>
                                </div>
                            </div>

                        <!-- Hình ảnh -->
                        <div class="form-group">
                            <label class="control-label" for="filebutton">Hình Ảnh</label>
                            <input type="file" id="image" class="form-control input-md" name="image">
                        </div>
                        <!-- Button -->

                        <div class="form-group">
                            <input type="submit" id="btnSub" name="btnSub" 
                                class="btn btn-primary" value="Thêm">
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