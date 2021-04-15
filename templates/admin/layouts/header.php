    <?php
    ob_start();
    include 'models/UserModel.php';

    session_start();
    
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
                            <img src="templates/admin/images/Users/<?= $_SESSION['admin'][0]['avatar'] ?>"
                                alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ml-1">
                                <?= $_SESSION['admin'][0]['firstName'] . " " . $_SESSION['admin'][0]['lastName'] ?> <i
                                    class="mdi mdi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">xin chào !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-outline"></i>
                                <span>Hồ sơ</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-settings-outline"></i>
                                <span> Cài đặt</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-lock-outline"></i>
                                <span>Màn hình khoá</span>
                            </a>

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
                        <span class="logo-lg">
                            <img src="templates/admin/assets\images\logo-dark.png" alt="" height="18">
                            <!-- <span class="logo-lg-text-dark">Velonic</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-lg-text-dark">V</span> -->
                            <img src="templates/admin/assets\images\logo-sm.png" alt="" height="22">
                        </span>
                    </a>

                    <a href="?action=dashboard" class="logo text-center logo-light">
                        <span class="logo-lg">
                            <img src="templates/admin/assets\images\logo-light.png" alt="" height="18">
                            <!-- <span class="logo-lg-text-dark">Velonic</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-lg-text-dark">V</span> -->
                            <img src="templates/admin/assets\images\logo-sm.png" alt="" height="22">
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

                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="#">Thêm sản phẩm</a></li>
                                    <li><a href="#">Thêm Danh Mục Sản Phẩm</a></li>
                                    <li><a href="#">Đơn Hàng</a></li>
                                </ul>
                            </li>
                            <!--tác giả-->
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="ion-md-mail"></i>
                                    <span>Tác Giả</span>

                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="email-inbox.html">Thêm Tác Giả</a></li>
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
                                    <li><a href="maps-gmap.html">Thêm Tin Tức</a></li>
                                    <li><a href="maps-gmap.html">Danh Sách Tin Tức</a></li>
                                    <li><a href="maps-gmap.html">Thêm Danh Mục Tin Tức</a></li>


                                </ul>
                            </li>
                            <!--NXB-->
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="ion-md-mail"></i>
                                    <span>Nhà Xuất Bản</span>

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

                                </a>
                                <ul class="nav-second-level" aria-expanded="false">

                                    <li><a href="email-compose.html">Tiêu Đề Website</a></li>

                                </ul>
                            </li>
                            <!--quản lý thành viên-->
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="ion-md-mail"></i>
                                    <span>Quản Lý Thành Viên</span>

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
                                    <span>Sản Phẩm</span>

                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="#">Thêm Sản Phẩm</a></li>
                                    <li><a href="#">Thêm Danh Mục Sản Phẩm</a></li>
                                    <li><a href="#"> Đơn Hàng</a></li>
                                    <li><a href="#">Danh Sách Sản Phẩm</a></li>
                                </ul>
                            </li>

                            <?php endif; ?>


                            <?php
                        if ($_SESSION['admin'][0]['id_role'] == 2) : ?>
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="ion-md-mail"></i>
                                    <span> Tác Giả </span>

                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="email-inbox.html">Thêm Tác Giả</a></li>
                                    <li><a href="?action=admin-author">Danh Sách Tác Giả</a></li>

                                </ul>
                            </li>
                            <?php endif; ?>

                            <?php
                        if ($_SESSION['admin'][0]['id_role'] == 2) : ?>
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="ion-md-mail"></i>
                                    <span> Nhà Xuất Bản</span>

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
                                    <li><a href="maps-gmap.html">Thêm Tin Tức</a></li>
                                    <li><a href="maps-gmap.html">Danh Sách Tin Tức</a></li>
                                    <li><a href="maps-gmap.html">Thêm Danh Mục Tin Tức</a></li>

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