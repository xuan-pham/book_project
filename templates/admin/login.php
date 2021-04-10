<?php session_start(); ?>

<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="templates/admin/css/style.css">

</head>

<body>
    <?php
    include "models/UserModel.php";

    if (isset($_SESSION['admin'])) {
        header('location: ?action=dashboard');
    } else {
        if (isset($_POST['dangnhap'])) {
            $user = $_POST['username'];
            $pass = ($_POST['password']);
            md5($pass);
            if (checkLogin($user, md5($pass))) {
                $users = getInfoOfUser($user);
                $_SESSION['admin'] = $users;
                header('location: ?action=dashboard');
            } else {
                echo '<div class="alert alert-danger">Đăng nhập không thành công</div>';
            }
        }
    }


    ?>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section"></h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap py-5">
                        <div class="img d-flex align-items-center justify-content-center"
                            style="background-image: url(templates/admin/images/bg.jpg);"></div>
                        <h3 class="text-center mb-0">Đăng nhập</h3>
                        <p class="text-center"></p>
                        <form action="#" class="login-form" method="POST">
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-user"></span></div>
                                <input type="text" name="username" class="form-control" placeholder="Tài Khoản"
                                    required>
                            </div>
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-lock"></span></div>
                                <input type="password" name="password" class="form-control" placeholder="Mật khẩu"
                                    required>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-100 text-md-right">
                                    <a href="#">Quên mật khẩu</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="dangnhap"
                                    class="btn form-control btn-primary rounded submit px-3">Đăng
                                    Nhập</button>
                            </div>
                        </form>
                        <div class="w-100 text-center mt-4 text">
                            <p class="mb-0">Không có tài khoản</p>
                            <a href="#">Tạo tài khoản</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>