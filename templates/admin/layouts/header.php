    <?php
    ob_start();
    include 'models/UserModel.php';


    if (!isset($_SESSION['admin'])) {
        echo '<script>
        window.location.replace("?action=login");
        </script>';
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description">
        <meta content="Coderthemes" name="author">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- App favicon -->
        <link rel="shortcut icon" href="templates/admin/assets\images\favicon.ico">

        <!-- Plugins css-->
        <link href="templates/admin/assets\libs\sweetalert2\sweetalert2.min.css" rel="stylesheet" type="text/css">

        <!-- App css -->
        <link href="templates/admin/assets\css\bootstrap.min.css" rel="stylesheet" type="text/css"
            id="bootstrap-stylesheet">
        <link href="templates/admin/assets\css\icons.min.css" rel="stylesheet" type="text/css">
        <link href="templates/admin/assets\css\app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet">
        <link href="templates/admin/assets\css\custom.css" rel="stylesheet" type="text/css" id="app-stylesheet">

    </head>

    <body>



        <!-- Begin page -->
        <div id="wrapper">

            <?php

            ?>
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">


                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false">

                            <span class="pro-user-name ml-1">
                                <?= $_SESSION['admin'][0]['firstName'] . " " . $_SESSION['admin'][0]['lastName'] ?> <i
                                    class="mdi mdi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <div class="dropddown-divider"></div>

                            <!-- item-->
                            <a href="?action=logout" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout-variant"></i>
                                <span>Đăng xuất</span>
                            </a>

                        </div>
                    </li>

                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="?action=dashboard" class="logo text-center logo-dark">
                        <span class="logo-lg text-white text-uppercase">
                            Quản lý sách
                            <!-- <span class="logo-lg-text-dark">Velonic</span> -->
                        </span>
                        <span class="logo-sm text-white text-uppercase">
                            <!-- <span class="logo-lg-text-dark">V</span> -->
                           Quản lý sách
                        </span>
                    </a>

                    <a href="?action=dashboard" class="logo text-center logo-light">
                        <span class="logo-lg text-white text-uppercase">
                           Quản lý sách
                            <!-- <span class="logo-lg-text-dark">Velonic</span> -->
                        </span>
                        <span class="logo-sm text-white text-uppercase">
                            <!-- <span class="logo-lg-text-dark">V</span> -->
                            Quản lý sách
                        </span>
                    </a>
                </div>

                <!-- LOGO -->


                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>

                    <li class="d-none d-lg-block">
                        <form class="app-search">
                            <div class="app-search-box">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
            <!-- end Topbar -->
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul class="metismenu" id="side-menu">

                            <li class="menu-title">Điều Hướng</li>
                            <?php
                            if ($_SESSION['admin'][0]['id_role'] == 1) : ?>
                            <!--sản phẩm -->
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="ion-md-speedometer"></i>
                                    <span> Sản Phẩm</span>
                                    <span class="menu-arrow"></span>

                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="?action=admin-product">Danh sách sản phẩm</a></li>
                                    <li><a href="?action=admin-add-product">Thêm sản phẩm</a></li>
                                    <li><a href="?action=admin-productCategory">Danh Mục Sản Phẩm</a></li>
                                    <li><a href="?action=admin-add-productCategory"> Thêm Danh Mục Sản Phẩm</a></li>
                                    <li><a href="?action=admin-order">Đơn Hàng</a></li>
                                </ul>
                            </li>
                            <!--tác giả-->
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="ion-md-mail"></i>
                                    <span>Tác Giả</span>
                                    <span class="menu-arrow"></span>

                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="?action=admin-add-author">Thêm Tác Giả</a></li>
                                    <li><a href="?action=admin-author">Danh Sách Tác Giả</a></li>

                                </ul>
                            </li>
                            <!--blog-->
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="ion-md-map"></i>
                                    <span> Tin Tức</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="?action=admin-add-post">Thêm Tin Tức</a></li>
                                    <li><a href="?action=admin-post">Danh Sách Tin Tức</a></li>
                                    <li><a href="?action=admin-postCategory">Danh Mục Tin Tức</a></li>
                                    <li><a href="?action=admin-add-postCategory">Thêm Danh Mục Tin Tức</a></li>


                                </ul>
                            </li>
                            <!--NXB-->
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="ion-md-mail"></i>
                                    <span>Nhà Xuất Bản</span>
                                    <span class="menu-arrow"></span>

                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="?action=admin-add-publisher">Thêm Nhà Xuất Bản</a></li>
                                    <li><a href="?action=admin-publisher">Danh Sách NXB</a></li>

                                </ul>
                            </li>
                            <!--hệ thống-->
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="ion-md-mail"></i>
                                    <span> Hệ Thống</span>
                                    <span class="menu-arrow"></span>

                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <!-- <li><a href="?action=admin-add-setting">Thêm Cài đặt</a></li> -->
                                    <li><a href="?action=admin-setting">Cài đặt Website</a></li>

                                </ul>
                            </li>
                            <!--quản lý thành viên-->
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="ion-md-mail"></i>
                                    <span>Quản Lý Thành Viên</span>
                                    <span class="menu-arrow"></span>

                                </a>
                                <ul class="nav-second-level" aria-expanded="false">

                                    <li><a href="?action=user-add">Thêm Thành Viên</a></li>
                                    <li><a href="?action=userlist">Danh Sách Thành Viên</a></li>
                                </ul>
                            </li>


                            <?php endif; ?>


                            <?php
                            if ($_SESSION['admin'][0]['id_role'] == 2) : ?>

                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="ion-md-speedometer"></i>
                                    <span> Sản Phẩm</span>
                                    <span class="menu-arrow"></span>

                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="?action=admin-product">Danh sách sản phẩm</a></li>
                                    <li><a href="?action=admin-add-product">Thêm sản phẩm</a></li>
                                    <li><a href="?action=admin-productCategory">Danh Mục Sản Phẩm</a></li>
                                    <li><a href="?action=admin-add-productCategory"> Thêm Danh Mục Sản Phẩm</a></li>
                                    <li><a href="#">Đơn Hàng</a></li>
                                </ul>
                            </li>

                            <?php endif; ?>


                            <?php
                            if ($_SESSION['admin'][0]['id_role'] == 2) : ?>
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="ion-md-mail"></i>
                                    <span>Tác Giả</span>
                                    <span class="menu-arrow"></span>

                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="?action=admin-add-author">Thêm Tác Giả</a></li>
                                    <li><a href="?action=admin-author">Danh Sách Tác Giả</a></li>

                                </ul>
                            </li>
                            <?php endif; ?>

                            <?php
                            if ($_SESSION['admin'][0]['id_role'] == 2) : ?>
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="ion-md-mail"></i>
                                    <span>Nhà Xuất Bản</span>
                                    <span class="menu-arrow"></span>

                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="?action=admin-add-publisher">Thêm Nhà Xuất Bản</a></li>
                                    <li><a href="?action=admin-publisher">Danh Sách NXB</a></li>

                                </ul>
                            </li>
                            <?php endif; ?>

                            <?php
                            if ($_SESSION['admin'][0]['id_role'] == 3) : ?>
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="ion-md-map"></i>
                                    <span> Tin Tức</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="?action=admin-add-post">Thêm Tin Tức</a></li>
                                    <li><a href="?action=admin-post">Danh Sách Tin Tức</a></li>
                                    <li><a href="?action=admin-postCategory">Danh Mục Tin Tức</a></li>
                                    <li><a href="?action=admin-add-postCategory">Thêm Danh Mục Tin Tức</a></li>

                                </ul>
                            </li>
                            <?php endif; ?>


                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->