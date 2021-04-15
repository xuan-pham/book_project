<?php include_once('templates/admin/layouts/header.php'); ?>
<div class="content-page">
    <div class="content">
        <div class="row">
            <div class="col-12 mx-auto p-5">
                <div class="card">
                    <div class="card-title text-center p-3 mx-auto">
                        <h3 class="font-weight-bold"> Danh Sách Thành Viên</h3>
                    </div>
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
                        $host = 'localhost';
                        $dbname = 'qlbansach';
                        $user = 'root';
                        $pass = '';
                        $conn = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $user, $pass);
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $query = "SELECT * FROM user";
                        $result = $conn->query($query);
                        foreach ($result as $users) {
                            echo '
                <tbody>
                <tr>
                    <th>' . $users['id'] . '</th>
                    <th>' . $users['username'] . '</th>
                    <th>' . $users['password'] . '</th>
                    <th>' . $users['firstName'] . '</th>
                    <th>' . $users['lastName'] . '</th>
                    <th>' . $users['phone'] . '</th>
                    <th>' . $users['birthday'] . '</th>
                    <th>' . $users['gender'] . '</th>
                    <th>' . $users['id_role'] . '</th>
                    <th>' . $users['created_at'] . '</th>
                    <th>' . $users['updated_at'] . '</th>
            <th>
                <a href="templates/admin/users/delete.php?deleteId=' . $users['id'] . ' ">
                <i style="margin-right: 10px;"
                class="fa fa-trash" aria-hidden="true"></i></a>
            <a href="?action=fixuserId=' . $users['id'] . ' "><i style="margin-left: 20px;"
            class="fa fa-edit" aria-hidden="true"></i></a>
            </th>
            </tr>
            </tbody>
        ';
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once('templates/admin/layouts/footer.php'); ?>