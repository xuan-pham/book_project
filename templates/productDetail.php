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
<section class="product-area shop-sidebar shop pt-5">
    <div class="container">
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
                        <input type="number" name="quantity" value="1" class="mt-3 mb-3">
                        <div class="clearfix"></div>
                        <button class="btn border-0 mt-3 mb-3" type="submit">Thêm vào giỏ hàng</button>
                    </form>
                </div>
            </div>
        </div>
</section>
<!--/ End Product Style 1  -->

<?php include_once('layouts/footer.php'); ?>