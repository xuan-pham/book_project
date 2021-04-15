    <?php include_once('templates/admin/layouts/footer.php'); ?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="view/css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
            integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <!--===============================================================================================-->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>

        <title>Document</title>
    </head>

    <?php


    include 'models/admin/ProductModel.php';

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

    <a class="btn btn-outline-danger"  href="templates/admin/products/delete.php?deleteId=' . $result['id'] . '";>
      <i class="fas fa-trash-alt"></i>Xóa   
    </a>
    <a class="btn btn-outline-danger" name="btn_delete" href="templates/admin/products/edit.php?editProduct=' . $result['id'] . '";>
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