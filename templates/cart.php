<?php
include_once('layouts/header.php');
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
                        <li class="active"><a href="?action=cart">Giỏ hàng</a></li>
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
        <form action="?action=order" method="POST">
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
                            <?php if (isset($_SESSION['cart'])) :
                                $totalCounter = 0;
                            ?>
                            <?php foreach ($_SESSION['cart'] as $item) :
                                    $totalPrice = $item['quantity'] * $item['price'];
                                    $totalCounter += $totalPrice;

                                ?>
                            <tr>
                                <td class="image" data-title="No">
                                    <img src="templates/images/products/<?= $item['image'] ?>" alt="">
                                </td>
                                <td class="product-des" data-title="Description">
                                    <p class="product-name"><a href="#"><?= $item['name'] ?></a></p>
                                    <p class="product-des"><?= $item['decription'] ?></p>
                                </td>
                                <td class="price" data-title="Price"><span><?= $item['price'] ?></span></td>
                                <td class="qty text-center" data-title="Qty">
                                    <!-- Input Order -->
                                    <div class="input-group">

                                        <input type="text" name="quantity" class="input-number" data-min="1"
                                            data-max="100" value=<?= $item['quantity'] ?>>

                                    </div>
                                    <!--/ End Input Order -->
                                </td>
                                <td class="total-amount" data-title="Total">
                                    <span><?= $totalPrice . ' vnđ' ?></span>
                                </td>
                                <td class="action" data-title="Remove"><a
                                        href="?action=deleteCartId-<?= $item['id'] ?>"><i
                                            class="ti-trash remove-icon"></i></a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
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
                                        <li>Tổng
                                            <span>
                                                <?php
                                                if (isset($totalCounter)) {
                                                    $_SESSION['totalCounter'] = $totalCounter;

                                                    echo $totalCounter . ' vnđ';
                                                } else {
                                                    echo "";
                                                }
                                                ?>
                                            </span>
                                        </li>
                                    </ul>
                                    <div class="button5">
                                        <button href="?action=order" class="btn" type="submit">Đặt hàng</button>
                                        <a href="?action=products" class="btn">Tiếp tục mua hàng</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ End Total Amount -->
                </div>
            </div>
        </form>
    </div>
</div>
<!--/ End Shopping Cart -->
<script>
localStorage.setItem("totalCounter", <?= $_SESSION['totalCounter'] ?>);
</script>
<?php include('layouts/footer.php'); ?>