<?php include('templates/admin/layouts/header.php'); ?>


<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <!--view-->
                <div class="col-12 mx-auto p-5">
                    <div class="card">
                        <div class="card-post">
                            <div class="flex">
                                <div class="products">
                                    <div><?= count($numberOfProduct) ?></div>
                                    <div>Sản phẩm</div>
                                </div>
                                <div class="products">
                                    <div><?= count($numberOfOrder) ?></div>
                                    <div>Đơn hàng</div>
                                </div>
                                <div class="products">
                                    <div><?= count($numberOfPost) ?></div>
                                    <div>Bài viết</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

        <?php include('templates/admin/layouts/footer.php'); ?>