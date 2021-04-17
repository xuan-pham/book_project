<?php include_once('layouts/header.php'); ?>

<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="blog-single.html">Contact</a></li>
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
                    <div class="form-main">
                        <div class="title">
                            <h4>Get in touch</h4>
                            <h3>Write us a message</h3>
                        </div>
                        <form class="form" method="post" action="mail/mail.php">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label>Your Name<span>*</span></label>
                                        <input name="name" type="text" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label>Your Subjects<span>*</span></label>
                                        <input name="subject" type="text" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label>Your Email<span>*</span></label>
                                        <input name="email" type="email" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label>Your Phone<span>*</span></label>
                                        <input name="company_name" type="text" placeholder="">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group message">
                                        <label>your message<span>*</span></label>
                                        <textarea name="message" placeholder=""></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group button">
                                        <button type="submit" class="btn ">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="single-head">
                        <div class="single-info">
                            <i class="fa fa-phone"></i>
                            <h4 class="title">Call us Now:</h4>
                            <ul>
                                <li>+123 456-789-1120</li>
                                <li>+522 672-452-1120</li>
                            </ul>
                        </div>
                        <div class="single-info">
                            <i class="fa fa-envelope-open"></i>
                            <h4 class="title">Email:</h4>
                            <ul>
                                <li><a href="mailto:info@yourwebsite.com">info@yourwebsite.com</a></li>
                                <li><a href="mailto:info@yourwebsite.com">support@yourwebsite.com</a></li>
                            </ul>
                        </div>
                        <div class="single-info">
                            <i class="fa fa-location-arrow"></i>
                            <h4 class="title">Our Address:</h4>
                            <ul>
                                <li>KA-62/1, Travel Agency, 45 Grand Central Terminal, New York.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Contact -->

<!-- Map Section -->
<div class="map-section" style="width:100%">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4552263292267!2d106.62735611480139!3d10.852939092269605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529b6a2b351a5%3A0x11690ada8c36f9bc!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIFRo4buxYyBow6BuaCBGUFQgUG9seXRlY2huaWMgVFAuSENNIChDUzMp!5e0!3m2!1svi!2s!4v1617088895587!5m2!1svi!2s"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
<!--/ End Map Section -->

<?php include_once('layouts/footer.php'); ?>