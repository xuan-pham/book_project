<?php include_once('layouts/header.php'); 
?>
<section class="blog-single section">
    <div class="container">
        <div class="row">
             <div class="col-8 col-lg-8 mx-auto">
                    
             <input type="hidden" value=<?= $post['id'] ?> name="post">
                            <div class="image">
                                <img src="templates\images\blogs\<?= $post['image'] ?>" alt="#">
                            </div>
                            <div class="blog-detail">
                                <h2 class="blog-title"><?= $post['title'] ?></h2>
                                <div class="blog-meta">
                           
                                    <span class="author"><a href="#"><i class="fa fa-user"></i>By Admin</a><a
                                            href="#"><i class="fa fa-calendar"></i>Dec 24, 2018</a>
                                </div>
                                <div class="content">
                                <blockquote> <i class="fa fa-quote-left"></i> <?= $post['content'] ?>
                                </blockquote>
                                    <p><?= $post['description'] ?></p>
                                </div>
                            </div>
                           
                    </div>            
             </div>                     
        </div>
</section>


<?php include_once('layouts/footer.php'); ?>