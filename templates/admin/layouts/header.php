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
                                <span>????ng xu???t</span>
                            </a>

                        </div>
                    </li>

                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="?action=dashboard" class="logo text-center logo-dark">
                        <span class="logo-lg text-white text-uppercase">
                            Qu???n l?? s??ch
                            <!-- <span class="logo-lg-text-dark">Velonic</span> -->
                        </span>
                        <span class="logo-sm text-white text-uppercase">
                            <!-- <span class="logo-lg-text-dark">V</span> -->
                           Qu???n l?? s??ch
                        </span>
                    </a>

                    <a href="?action=dashboard" class="logo text-center logo-light">
                        <span class="logo-lg text-white text-uppercase">
                           Qu???n l?? s??ch
                            <!-- <span class="logo-lg-text-dark">Velonic</span> -->
                        </span>
                        <span class="logo-sm text-white text-uppercase">
                            <!-- <span class="logo-lg-text-dark">V</span> -->
                            Qu???n l?? s??ch
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

                            <li class="menu-title">??i???u H?????ng</li>
                            <?php
                            if ($_SESSION['admin'][0]['id_role'] == 1) : ?>
                            <!--s???n ph???m -->
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="ion-md-speedometer"></i>
                                    <span> S???n Ph???m</span>
                                    <span class="menu-arrow"></span>

                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="?action=admin-product">Danh s??ch s???n ph???m</a></li>
                                    <li><a href="?action=admin-add-product">Th??m s???n ph???m</a></li>
                                    <li><a href="?action=admin-productCategory">Danh M???c S???n Ph???m</a></li>
                                    <li><a href="?action=admin-add-productCategory"> Th??m Danh M???c S???n Ph???m</a></li>
                                    <li><a href="?action=admin-order">????n H??ng</a></li>
                                </ul>
                            </li>
                            <!--t??c gi???-->
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="ion-md-mail"></i>
                                    <span>T??c Gi???</span>
                                    <span class="menu-arrow"></span>

                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="?action=admin-add-author">Th??m T??c Gi???</a></li>
                                    <li><a href="?action=admin-author">Danh S??ch T??c Gi???</a></li>

                                </ul>
                            </li>
                            <!--blog-->
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="ion-md-map"></i>
                                    <span> Tin T???c</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="?action=admin-add-post">Th??m Tin T???c</a></li>
                                    <li><a href="?action=admin-post">Danh S??ch Tin T???c</a></li>
                                    <li><a href="?action=admin-postCategory">Danh M???c Tin T???c</a></li>
                                    <li><a href="?action=admin-add-postCategory">Th??m Danh M???c Tin T???c</a></li>


                                </ul>
                            </li>
                            <!--NXB-->
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="ion-md-mail"></i>
                                    <span>Nh?? Xu???t B???n</span>
                                    <span class="menu-arrow"></span>

                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="?action=admin-add-publisher">Th??m Nh?? Xu???t B???n</a></li>
                                    <li><a href="?action=admin-publisher">Danh S??ch NXB</a></li>

                                </ul>
                            </li>
                            <!--h??? th???ng-->
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="ion-md-mail"></i>
                                    <span> H??? Th???ng</span>
                                    <span class="menu-arrow"></span>

                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <!-- <li><a href="?action=admin-add-setting">Th??m Ca??i ??????t</a></li> -->
                                    <li><a href="?action=admin-setting">Ca??i ??????t Website</a></li>

                                </ul>
                            </li>
                            <!--qu???n l?? th??nh vi??n-->
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="ion-md-mail"></i>
                                    <span>Qu???n L?? Th??nh Vi??n</span>
                                    <span class="menu-arrow"></span>

                                </a>
                                <ul class="nav-second-level" aria-expanded="false">

                                    <li><a href="?action=user-add">Th??m Th??nh Vi??n</a></li>
                                    <li><a href="?action=userlist">Danh S??ch Th??nh Vi??n</a></li>
                                </ul>
                            </li>


                            <?php endif; ?>


                            <?php
                            if ($_SESSION['admin'][0]['id_role'] == 2) : ?>

                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="ion-md-speedometer"></i>
                                    <span> S???n Ph???m</span>
                                    <span class="menu-arrow"></span>

                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="?action=admin-product">Danh s??ch s???n ph???m</a></li>
                                    <li><a href="?action=admin-add-product">Th??m s???n ph???m</a></li>
                                    <li><a href="?action=admin-productCategory">Danh M???c S???n Ph???m</a></li>
                                    <li><a href="?action=admin-add-productCategory"> Th??m Danh M???c S???n Ph???m</a></li>
                                    <li><a href="#">????n H??ng</a></li>
                                </ul>
                            </li>

                            <?php endif; ?>


                            <?php
                            if ($_SESSION['admin'][0]['id_role'] == 2) : ?>
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="ion-md-mail"></i>
                                    <span>T??c Gi???</span>
                                    <span class="menu-arrow"></span>

                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="?action=admin-add-author">Th??m T??c Gi???</a></li>
                                    <li><a href="?action=admin-author">Danh S??ch T??c Gi???</a></li>

                                </ul>
                            </li>
                            <?php endif; ?>

                            <?php
                            if ($_SESSION['admin'][0]['id_role'] == 2) : ?>
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="ion-md-mail"></i>
                                    <span>Nh?? Xu???t B???n</span>
                                    <span class="menu-arrow"></span>

                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="?action=admin-add-publisher">Th??m Nh?? Xu???t B???n</a></li>
                                    <li><a href="?action=admin-publisher">Danh S??ch NXB</a></li>

                                </ul>
                            </li>
                            <?php endif; ?>

                            <?php
                            if ($_SESSION['admin'][0]['id_role'] == 3) : ?>
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="ion-md-map"></i>
                                    <span> Tin T???c</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="?action=admin-add-post">Th??m Tin T???c</a></li>
                                    <li><a href="?action=admin-post">Danh S??ch Tin T???c</a></li>
                                    <li><a href="?action=admin-postCategory">Danh M???c Tin T???c</a></li>
                                    <li><a href="?action=admin-add-postCategory">Th??m Danh M???c Tin T???c</a></li>

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