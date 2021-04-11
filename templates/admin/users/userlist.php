<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Danh sách thành viên</title>
    <link rel="stylesheet" href="templates/admin/css/user.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    include "models/UserModel.php";

    ?>

    <div class="page-title-box">
        <h4 class="page-title">Danh Sách Thành Viên</h4>
        <div class="page-title-right">
            <div class="breadcrumb p-0 m-0">
                <span class="breadcrumb-item"><a href="/book_project/?action=dashboard">Velonic /</a></span>
                <span class="breadcrumb-item"><a href="#">Quản Lý Thành Viên /</a></span>
                <span class="breadcrumb-item active">Danh Sách Thành Viên</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tài Khoản</th>
                    <th>Mật khẩu</th>
                    <th>Họ </th>
                    <th>Tên</th>
                    <th>Số Điện Thoại</th>
                    <th>Ngày Sinh</th>
                    <th>Giới Tính</th>
                    <th>Quyền</th>
                    <th>Ngày Thêm</th>
                    <th>Ngày Cập nhật</th>
                    <th>Chức Năng</th>

                </tr>
            </thead>
            <?php
            $user = getAllUser();
            foreach ($user as $users) {
                echo '
                <tbody>
                <tr>
                    <th>' . $users['id'] . '</th>
                    <th>' . $users['username'] . '</th>
                    <th>' . $users['password'] . '</th>
                    <th>' . $users['firstName'] . ' </th>
                    <th>' . $users['lastName'] . '</th>
                    <th>' . $users['phone'] . '</th>
                    <th>' . $users['birthday'] . '</th>
                    <th>' . $users['gender'] . '</th>
                    <th>' . $users['id_role'] . '</th>
                    <th>' . $users['created_at'] . '</th>
                    <th>' . $users['updated_at'] . '</th>
                    <th>
                    <a href="templates/admin/users/delete.php?deleteId=' . $users['id'] . '">xoa</a>
                    <a href="templates/admin/users/fixuser.php?fixuserId=' . $users['id'] . '">sua</a>
                    </th>
                </tr>
            </tbody>
                ';
            }
            ?>

        </table>
    </div>

</body>

</html>