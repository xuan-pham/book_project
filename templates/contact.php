<?php include('layouts/header.php'); ?>


<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="?action=home">Home<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="?action=contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Contact -->
<section id="contact-us" class="contact-us section">
    <div class="container">
        <div class="contact-head">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <!-- Map Section -->
                    <div class="map-section" style="width:100%">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4552263292267!2d106.62735611480139!3d10.852939092269605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529b6a2b351a5%3A0x11690ada8c36f9bc!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIFRo4buxYyBow6BuaCBGUFQgUG9seXRlY2huaWMgVFAuSENNIChDUzMp!5e0!3m2!1svi!2s!4v1617088895587!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <!--/ End Map Section -->
                </div>
                <div class="col-lg-4 col-12">
                    <div class="single-head">
                        <?php foreach ($settingItem as $item) : ?>
                            <div class="single-info">
                                <i class="fa fa-phone"></i>
                                <h4 class="title">Gọi cho chúng tôi:</h4>
                                <ul>
                                    <li><?= $item['phone'] ?></li>
                                </ul>
                            </div>
                            <div class="single-info">
                                <i class="fa fa-envelope-open"></i>
                                <h4 class="title">Email:</h4>
                                <ul>
                                    <li><a href="<?= $item['email'] ?>"><?= $item['email'] ?></a></li>
                                </ul>
                            </div>
                            <div class="single-info">
                                <i class="fa fa-location-arrow"></i>
                                <h4 class="title">Địa chỉ:</h4>
                                <ul>
                                    <li><?= $item['address'] ?></li>
                                </ul>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Contact -->


<?php include_once('layouts/footer.php'); ?>