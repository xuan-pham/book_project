<?php include_once('layouts/header.php'); 
// print_r($_SESSION['cart']);
?>

<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="index1.html">Trang chủ<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="blog-single.html">Thanh toán</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Checkout -->
<section class="shop checkout section">
    <div class="container">

        <form class="form" method="post" action="?action=payment">
            <?php if(isset($_SESSION['cart'])): ?>
            <?php foreach ($_SESSION['cart'] as $item): ?>
            <div style="display:none">
                <input type="text" name="productId" value=<?=$item['id']?>>
                <input type="text" name="quantity" value=<?=$item['quantity']?>>
                <input type="text" name="price" value=<?=$item['price']?>>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="checkout-form">
                        <h2 class="pb-3">Thông tin thanh toán</h2>
                        <!-- Form -->
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Tên<span>*</span></label>
                                    <input type="text" name="firstname" placeholder="" >
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Họ<span>*</span></label>
                                    <input type="text" name="lastname" placeholder="" >
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Địa chỉ email<span>*</span></label>
                                    <input type="email" name="email" placeholder="" >
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Số điện thoại<span>*</span></label>
                                    <input type="text" name="phone" placeholder="" >
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label>Địa chỉ<span>*</span></label>
                                    <textarea type="text" name="address" rows="2" cols="50"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label>Ghi chú<span>*</span></label>
                                    <textarea type="text" name="note" rows="5" cols="50"></textarea>
                                </div>
                            </div>
                        </div>

                        <!--/ End Form -->
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="order-details">
                        <!-- Order Widget -->
                        <div class="single-widget">
                            <h2>Tổng giỏ hàng</h2>
                            <div class="content">
                                <ul>
                                    <li class="last">Tổng thanh toán<span id="totalCounter"></span></li>
                                </ul>
                            </div>
                        </div>
                        <!--/ End Order Widget -->

                        <!-- Button Widget -->
                        <div class="single-widget get-button">
                            <div class="content">
                                <div class="button">
                                    <button type="submit" class="btn">Thanh toán</button>
                                </div>
                            </div>
                        </div>
                        <!--/ End Button Widget -->
                    </div>
                </div>
            </div>
        </form>

    </div>
</section>
<!--/ End Checkout -->
<script>
document.getElementById("totalCounter").innerHTML = localStorage.getItem('totalCounter');
</script>

<?php include_once('layouts/footer.php'); ?>