<?php include_once('layouts/header.php'); ?>

<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="index1.html">Trang chủ<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="blog-single.html">Sản phẩm</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Product Style -->
<section class="product-area shop-sidebar shop pt-5 pb-5">
    <div class="container">

        <div class="productDetail">
            <div class="row">
                <div class="col-lg-5 col-md-4 col-12">
                    <div class="shop-sidebar">
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="templates/images/products/<?= $product['image'] ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-8 col-12 pl-5">
                    <div class="title mb-3">
                        <h1><?= $product['name'] ?></h1>
                    </div>
                    <div class="info">
                        <form method="POST" action="?action=addToCart">
                            <input type="hidden" value=<?= $product['id'] ?> name="product_id">
                            <h5>
                                <span class="price">Giá: </span>
                                <?= $product['price'] ?>
                            </h5>
                            <div class="addToCart">
                                <input type="number" name="quantity" value="1" class="mt-3 mb-3">
                                <button class="btn border-0 mt-3 mb-3" type="submit">Thêm vào giỏ hàng</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <button type="button" class="btn btn-primary borer-0 mt-5 mb-5">
                    Chi tiết sản phẩm
                </button>
                <div class="">
                    <?= $product['detail'] ?>
                </div>
            </div>
        </div>
</section>
<!--/ End Product Style 1  -->

<!-- Start Product Area -->
<div class="product-area section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Sản phẩm liên quan</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="product-info">

                    <div class="tab-content" id="myTabContent">

                        <!-- Start Single Tab -->
                        <div class="tab-pane fade show active" role="tabpanel">
                            <div class="tab-single">
                                <div class="row">
                                    <?php foreach ($productFeatured as $item) : ?>
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="?action=productId-<?= $item['id'] ?>">
                                                    <img class="default-img"
                                                        src="templates\images\products\<?= $item['image'] ?>" alt="#">

                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="?action=productId-<?= $item['id'] ?>"><?= $item['name'] ?></a></h3>
                                                <div class="product-price">
                                                    <span><?= $item['price'] ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <!--/ End Single Tab -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Product Area -->

<?php include_once('layouts/footer.php'); ?>