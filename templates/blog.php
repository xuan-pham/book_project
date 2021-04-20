<?php include_once('layouts/header.php'); ?>


<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="index1.html">Trang chủ<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="blog-single.html">Tin tức</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Blog Single -->
<section class="blog-single section">
    <div class="container">
        <div class="row">
             <div class="col-8 col-lg-8 mx-auto">
                    
                      <?php foreach ($posts as $item) : ?>
                      <input type="hidden" value="<?= $item['id'] ?>">
                    <a href="?action=postId-<?= $item['id'] ?>">
                            <div class="image">
                                <img src="templates\images\blogs\<?= $item['image'] ?>" alt="#">
                            </div>
                            <div class="blog-detail">
                                <h2 class="blog-title"><?= $item['title'] ?></h2>
                                <div class="blog-meta">
                                </a>
                                    <span class="author"><a href="#"><i class="fa fa-user"></i>By Admin</a><a
                                            href="#"><i class="fa fa-calendar"></i>Dec 24, 2018</a>
                                </div>
                            </div>
                           
                            <?php endforeach; ?>
                    </div>            
             </div>                     
        </div>
</section>
<!--/ End Blog Single -->

<?php include_once('layouts/footer.php'); ?>