<?php include_once('templates/admin/layouts/footer.php'); ?>
<?php
include '../../../models/UserModel.php';
include '../../../models/admin/ProductModel.php';

session_start();

if (!isset($_SESSION['admin'])) {
    header('location: ?action=login');
} ?>
<form action="" method="post">

    <div class="card-header">
        Danh Sách Sản Phẩm
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Ảnh</th>
                    <th>Tên</th>
                    <th>Số Lượng</th>
                    <th>Mô Tả</th>
                    <th>Chi Tiết</th>
                    <th>Giá</th>
                    <th>Ngày Xuất Bản</th>
                    <th>Ngày Cập Nhật</th>

                </tr>
            </thead>
            <tbody>
                <div class="row">
                    <a class="btn btn-secondary m-3" href="create.php"><i class="fas fa-plus-square">Thêm Sản
                            Phẩm</i></a>
                </div>
                <?php
                $results = getAllProducts();
                foreach ($results as $result) {
                    echo '
              
  <tr>
  <td>' . $result['id'] .  '</td>            
  <td><img src ="templates/images/products/' . $result['image'] . '"width="50px" height="50px" ></td>
  <td>' .  $result['name'] . '</td>
  <td>' .  $result['quantity'] . '</td>
  <td>' .  $result['decription'] . '</td>
  <td>' .  $result['detail'] . '</td>
  <td>' .  $result['price'] . '</td>
  <td>' .  $result['created_at'] . '</td>
  <td>' .  $result['updated_at'] . '</td>
  <td>

    <a class="btn btn-outline-danger" id="delete" name="delete" href="index.php?id=' . $result['id'] . '";>
      <i class="fas fa-trash-alt"></i>Xóa   
    </a>
    <a class="btn btn-outline-danger" name = "btn_delete" href="edit' . $result['id'] . '";>
    <i class="fas fa-cog"></i>Sửa
    </td>
</tr>';
                }

                ?>


            </tbody>
        </table>
    </div>
    </div>

</form>



<!-- Vendor js -->
<script src="templates/admin/assets\js\vendor.min.js"></script>

<!-- Sparkline charts -->
<script src="templates/admin/assets\libs\jquery-sparkline\jquery.sparkline.min.js"></script>

<script src="templates/admin/assets\libs\moment\moment.min.js"></script>
<script src="templates/admin/assets\libs\jquery-scrollto\jquery.scrollTo.min.js"></script>
<script src="admin/assets\libs\sweetalert2\sweetalert2.min.js"></script>

<!-- Chat app -->
<script src="templates/admin/assets\js\pages\jquery.chat.js"></script>

<!-- Todo app -->
<script src="templates/admin/assets\js\pages\jquery.todo.js"></script>

<!--Morris Chart-->
<script src="templates/admin/assets\libs\morris-js\morris.min.js"></script>
<script src="templates/admin/assets\libs\raphael\raphael.min.js"></script>
<!-- Dashboard init JS -->
<script src="templates/admin/assets\js\pages\dashboard3.init.js"></script>

<!-- App js -->
<script src="templates/admin/assets\js\app.min.js"></script>

<?php include_once('templates/admin/layouts/footer.php'); ?>