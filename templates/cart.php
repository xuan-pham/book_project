<?php 
include_once('layouts/header.php');
print_r($_SESSION['cart']);
// session_destroy();
?>


<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="blog-single.html">Cart</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Shopping Cart -->
<div class="shopping-cart section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Shopping Summery -->
                <table class="table shopping-summery">
                    <thead>
                        <tr class="main-hading">
                            <th>Hình</th>
                            <th>Tên</th>
                            <th class="text-center">Giá</th>
                            <th class="text-center">Số lượng</th>
                            <th class="text-center">Tổng</th>
                            <th class="text-center"><i class="ti-trash remove-icon"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(isset($_SESSION['cart'])): ?>
                        <tr>
                            <td class="image" data-title="No">
                                <img src="templates/images/products/<?= $_SESSION['cart']['image'] ?>" alt="">
                            </td>
                            <td class="product-des" data-title="Description">
                                <p class="product-name"><a href="#"><?= $_SESSION['cart']['name'] ?></a></p>
                                <p class="product-des"><?= $_SESSION['cart']['decription'] ?></p>
                            </td>
                            <td class="price" data-title="Price"><span><?= $_SESSION['cart']['price'] ?></span></td>
                            <td class="qty" data-title="Qty">
                                <!-- Input Order -->
                                <div class="input-group">
                                    <div class="button minus">
                                        <button type="button" class="btn btn-primary btn-number" disabled="disabled"
                                            data-type="minus" data-field="quant[1]">
                                            <i class="ti-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" name="quant[1]" class="input-number" data-min="1" data-max="100"
                                        value="1">
                                    <div class="button plus">
                                        <button type="button" class="btn btn-primary btn-number" data-type="plus"
                                            data-field="quant[1]">
                                            <i class="ti-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <!--/ End Input Order -->
                            </td>
                            <td class="total-amount" data-title="Total">
                                <span><?= $_SESSION['cart']['quantity'] * $_SESSION['cart']['price'] ?></span>
                            </td>
                            <td class="action" data-title="Remove"><a href="    "><i
                                        class="ti-trash remove-icon"></i></a>
                            </td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
                <!--/ End Shopping Summery -->
            </div>
        </div>
        <div class=" row">
            <div class="col-12">
                <!-- Total Amount -->
                <div class="total-amount">
                    <div class="row">
                        <div class="col-lg-8 col-md-5 col-12">

                        </div>
                        <div class="col-lg-4 col-md-7 col-12">
                            <div class="right">
                                <ul>
                                    <li>Cart Subtotal<span>$330.00</span></li>
                                    <li>Shipping<span>Free</span></li>
                                </ul>
                                <div class="button5">
                                    <a href="#" class="btn">Checkout</a>
                                    <a href="#" class="btn">Continue shopping</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ End Total Amount -->
            </div>
        </div>
    </div>
</div>
<!--/ End Shopping Cart -->

<?php 
include_once('layouts/footer.php'); 
?>