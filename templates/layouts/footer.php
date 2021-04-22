<!-- Start Footer Area -->
<footer class="footer">
    <!-- Footer Top -->
    <div class="footer-top section">
        <div class="container">
            <div class="row">
                <?php foreach ($settingItem as $item) : ?>
                <div class="col-lg-5 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer about">
                        <div class="logo">
                            <a href="?action=home"><img src="templates\images\<?= $item['logo'] ?>" alt="logo"></a>
                        </div>
                        <h3 style="color: #fff;"><?= $item['name'] ?></h3>
                        <p class="call">Hãy gọi chúng tôi<span><a
                                    href="tel:<?= $item['phone'] ?>"><?= $item['phone'] ?></a></span></p>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer links">
                        <h4>Thông tin</h4>
                        <ul>
                            <li><a href="#">Về Chúng Tôi</a></li>
                            <li><a href="#">Các câu hỏi thường gặp</a></li>
                            <li><a href="#">Điều khoản dịch vụ</a></li>
                            <li><a href="#">Liên hệ với chúng tôi</a></li>
                            <li><a href="#">Hướng dẫn</a></li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer links">
                        <h4>Dịch vụ khách hàng</h4>
                        <ul>
                            <li><a href="#">Phương thức thanh toán</a></li>
                            <li><a href="#">Hoàn trả</a></li>
                            <li><a href="#">Đổi trả</a></li>
                            <li><a href="#">Giao hàng</a></li>
                            <li><a href="#">Chính sách quyền riêng tư</a></li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer social">
                        <h4>Liên Lạc</h4>
                        <!-- Single Widget -->
                        <div class="contact">
                            <ul>
                                <li>Địa chỉ: <?= $item['address'] ?></li>
                                <li>Email: <?= $item['email'] ?></li>
                                <li>Điện thoại: <?= $item['phone'] ?></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <!-- End Single Widget -->
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>


    <!-- Jquery -->
    <script src="templates/js\jquery.min.js"></script>
    <script src="templates/js\jquery-migrate-3.0.0.js"></script>
    <script src="templates/js\jquery-ui.min.js"></script>
    <!-- Popper JS -->
    <script src="templates/js\popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="templates/js\bootstrap.min.js"></script>
    <!-- Slicknav JS -->
    <script src="templates/js\slicknav.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="templates/js\owl-carousel.js"></script>
    <!-- Magnific Popup JS -->
    <script src="templates/js\magnific-popup.js"></script>
    <!-- Fancybox JS -->
    <script src="templates/js\facnybox.min.js"></script>
    <!-- Waypoints JS -->
    <script src="templates/js\waypoints.min.js"></script>
    <!-- Countdown JS -->
    <script src="templates/js\finalcountdown.min.js"></script>
    <!-- Nice Select JS -->
    <script src="templates/js\nicesellect.js"></script>
    <!-- Ytplayer JS -->
    <script src="templates/js\ytplayer.min.js"></script>
    <!-- Flex Slider JS -->
    <script src="templates/js\flex-slider.js"></script>
    <!-- ScrollUp JS -->
    <script src="templates/js\scrollup.js"></script>
    <!-- Onepage Nav JS -->
    <script src="templates/js\onepage-nav.min.js"></script>
    <!-- Easing JS -->
    <script src="templates/js\easing.js"></script>
    <!-- Active JS -->
    <script src="templates/js\active.js"></script>
    </body>

    </html>