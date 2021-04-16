<?php include('templates/admin/layouts/header.php'); ?>

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
                    <div class="card-title text-center p-3 mx-auto">
                        <h3 class="font-weight-bold"> Sửa Bài Viết</h3>
                    </div>
                    <form class="form-horizontal" style="margin-left: 38%;" method="POST" enctype="multipart/form-data">
                        <!-- Tên Sản Phẩm-->
                        <input type="hidden" name="id" style="width: 130%;"
                            value="<?Php echo '' . $editPost['id'] . ''; ?>">
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="product_name">Tiêu Đề</label>
                            <div class="col-md-4">
                                <input id="name" name="title" style="width: 130%;"
                                    value="<?Php echo '' . $editPost['title'] . ''; ?>" class="form-control input-md"
                                    type="text">
                            </div>
                        </div>
                        <!-- Miêu tả sản phẩm-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="product_name_fr">Mô Tả</label>
                            <div class="col-md-4">
                                <input id="product_name_fr" style="width: 130%;" name="content"
                                    class="form-control input-md" value="<?Php echo '' . $editPost['content'] . ''; ?>"
                                    type="text">

                            </div>
                        </div>

                        <!-- Loại sản phẩm -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="post_categorie">Loại Bài Viết</label>
                            <div class="col-md-4">

                                <select id="id_postCategory" name="id_PostCategory" style="width: 130%;"
                                    class="form-control">
                                    <?php foreach ($categoryList as $category)
                                        echo '<option value="' . $category['id'] . '">' . $category['name'] . '</option>
                       ' ?>

                                </select>
                            </div>
                        </div>
                        <!---->

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="post_categorie">Trạng Thái Bài viết</label>
                            <div class="col-md-4">
                                <select name="status" style="width: 130%;" class="form-control">
                                    <option>Chọn trạng thái</option>
                                    <option>1 hoạt động</option>
                                    <option>2 dừng hoạt động</option>
                                </select>
                            </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="description">Chi Tiết</label>
                            <div class="col-md-4">
                                <textarea class="form-control" style="width: 130%;" id="description"
                                    name="description"><?Php echo '' . $editPost['description'] . ''; ?></textarea>
                            </div>
                        </div>

                        <!-- Hình ảnh -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Hình Ảnh</label>
                            <input type="file" id="image" class="form-control input-md" name="image" style="width: 40%;
    margin-left: 14px;">
                        </div>
                        <!-- Button -->

                        <div class="form-group">
                            <input type="submit" id="btnSub" name="btnSub" style="margin-left: 14px;"
                                class="btn btn-primary" value="Thêm">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('templates/admin/layouts/footer.php'); ?>