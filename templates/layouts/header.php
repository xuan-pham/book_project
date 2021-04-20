<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Tag  -->
    <title>Book Project</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="templates\images\favicon.png">
    <!-- Web Font -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

    <!-- StyleSheet -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="templates/css/bootstrap.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="templates/css/magnific-popup.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="templates/css/font-awesome.css">
    <!-- Fancybox -->
    <link rel="stylesheet" href="templates/css/jquery.fancybox.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="templates/css/themify-icons.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="templates/css/niceselect.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="templates/css/animate.css">
    <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="templates/css/flex-slider.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="templates/css/owl-carousel.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="templates/css/slicknav.min.css">

    <!-- Eshop StyleSheet -->
    <link rel="stylesheet" href="templates/css/reset.css">
    <link rel="stylesheet" href="templates/css/style.css">
    <link rel="stylesheet" href="templates/css/responsive.css">

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">
</head>

<body class="js">
    <?php
    include_once('models/admin/PostCategoryModel.php');
    ?>
    <!-- Header -->
    <header class="header shop">
        <!-- End Topbar -->
        <div class="middle-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-12">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="?action=home"><img src="templates\images\logo.png" alt="logo"></a>
                        </div>
                        <!--/ End Logo -->
                        <!-- Search Form -->
                        <div class="search-top">
                            <div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
                            <!-- Search Form -->
                            <div class="search-top">
                                <form action="?action=search" method="GET">
                                    <input type="text" placeholder="Search here..." name="search">
                                    <button type="submit"><i class="ti-search"></i></button>
                                </form>
                            </div>
                            <!--/ End Search Form -->
                        </div>
                        <!--/ End Search Form -->
                        <div class="mobile-nav"></div>
                    </div>
                    <div class="col-lg-8 col-md-7 col-12">
                        <div class="search-bar-top">
                            <div class="search-bar">
                                <form action="?action=search" method="GET">
                                    <input name="search" placeholder="Tìm kiếm sản phẩm....." type="search">
                                    <button class="btnn" type="submit"><i class="ti-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-12">
                        <div class="right-bar">
                            <!-- Search Form -->
                            <div class="sinlge-bar">
                                <a href="?action=login" class="single-icon"><i class="fa fa-user-circle-o"
                                        aria-hidden="true"></i></a>
                            </div>
                            <div class="sinlge-bar shopping">
                                <a href="?action=cart" class="single-icon"><i class="ti-bag"></i>
                                    <span class="total-count">
                                        <?php
                                        if (isset($_SESSION['cart'])) {
                                            $number = $_SESSION['cart'];
                                            echo count($number);
                                        } else {
                                            echo 0;
                                        }
                                        ?>
                                    </span>
                                </a>
                                <!-- Shopping Item -->
                                <!-- <div class="shopping-item">
                                    <div class="dropdown-cart-header">
                                        <span>2 Items</span>
                                        <a href="#">View Cart</a>
                                    </div>
                                    <ul class="shopping-list">
                                        <li>
                                            <a href="#" class="remove" title="Remove this item"><i
                                                    class="fa fa-remove"></i></a>
                                            <a class="cart-img" href="#"><img src="templates\images\product-1.jpg"
                                                    alt="#"></a>
                                            <h4><a href="#">Woman Ring</a></h4>
                                            <p class="quantity">1x - <span class="amount">$99.00</span></p>
                                        </li>
                                        <li>
                                            <a href="#" class="remove" title="Remove this item"><i
                                                    class="fa fa-remove"></i></a>
                                            <a class="cart-img" href="#"><img src="templates\images\product-2.jpg"
                                                    alt="#"></a>
                                            <h4><a href="#">Woman Necklace</a></h4>
                                            <p class="quantity">1x - <span class="amount">$35.00</span></p>
                                        </li>
                                    </ul>
                                    <div class="bottom">
                                        <div class="total">
                                            <span>Total</span>
                                            <span class="total-amount">$134.00</span>
                                        </div>
                                        <a href="checkout.html" class="btn animate">Checkout</a>
                                    </div>
                                </div> -->
                                <!--/ End Shopping Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div class="cat-nav-head">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="all-category">
                                <h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>DANH MỤC
                                </h3>
                                <?php if (isset($categoriesProduct)) : ?>
                                <ul class="main-category">
                                    <?php foreach ($categoriesProduct as $item) : ?>
                                    <li><a><?= $item['name'] ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php else : ?>
                                <?php endif; ?>

                            </div>
                        </div>
                        <div class="col-lg-9 col-12">
                            <div class="menu-area">
                                <!-- Main Menu -->
                                <nav class="navbar navbar-expand-lg">
                                    <div class="navbar-collapse">
                                        <div class="nav-inner">
                                            <ul class="nav main-menu menu navbar-nav">
                                                <li class="active"><a href="?action=home">Trang chủ</a></li>
                                                <li><a href="?action=products">Sản phẩm</a></li>
<<<<<<< HEAD
                                                <li><a href="#">Tin tức<i class="ti-angle-down"></i></a>
                                              
                                                    <ul class="dropdown">
                                                    <?php foreach ($posts as $item){
                                                        echo  '<li><a href="?action=blogs"><?='. $item['name'].' ?></a></li>';  ?>   
                                 <?php
                                            }
                                            ?>
                                              </ul>
                                        
=======
                                                <li><a href="?action=blogs">Tin tức<i class="ti-angle-down"></i></a>

                                                    <?php
                                                    $categoriesProduct = getAllPostCategory();
                                                    ?>
                                                    <ul class="dropdown">
                                                        <?php foreach ($categoriesProduct as $item) : ?>
                                                        <li>
                                                            <a href="?action=blogs"><?= $item['name'] ?></a>
                                                        </li>
                                                        <?php endforeach; ?>
                                                    </ul>

>>>>>>> a3e24ec2e15a812dfa0a9ee1e1c60fb3496bee98
                                                </li>
                                                <li><a href="?action=contact">Liên hệ</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                                <!--/ End Main Menu -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <!--/ End Header -->