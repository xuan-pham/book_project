<!-- Start Footer Area -->
<footer class="footer">
    <!-- Footer Top -->
    <div class="footer-top section">
        <div class="container">
            <div class="row">
                <?php foreach ($settingItem as $item) : ?>
                <div class="col-lg-6 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer about">
                        <div class="logo">
                            <a href="?action=home"><img style="width:110px; height: 32px"
                                    src="templates/admin/images/logo/<?= $item['logo'] ?>" alt="logo"></a>
                        </div>
                        <h3 style="color: #fff;"><?= $item['name'] ?></h3>
                        <p class="call">Hãy gọi chúng tôi<span><a
                                    href="tel:<?= $item['phone'] ?>"><?= $item['phone'] ?></a></span></p>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-6 col-md-6 col-12">
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