<?php include_once('layouts/header.php');
?>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
mysqli_set_charset($conn, "utf8");
if (mysqli_connect_errno()) {
    echo "Connect error" . mysqli_connect_error();
}
$limit = 4;
if (isset($_GET["page"])) {
    $page  = $_GET["page"];
} else {
    $page = 1;
};
$start_from = ($page - 1) * $limit;
$result = mysqli_query($conn, "SELECT * FROM post  LIMIT $start_from, $limit");
?>

<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="index1.html">Trang chủ<i class="ti-arrow-right"></i></a></li>

                        <?php foreach ($categoriesPosts as $item) : ?>
                            <li><a href="?action=postCategoryId-<?= $item['id'] ?>"><?= $item['name'] ?></a>
                            </li>
                        <?php endforeach; ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Blog Single -->
<section class="blog-single section">
    <?php
    while ($posts = mysqli_fetch_array($result)) {
    ?>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-8 col-lg-8 mx-5">
                    <a href="?action=postId-<?= $posts['id'] ?>">
                        <div class="image">
                            <img src="templates\images\blogs\<?= $posts['image'] ?>" alt="#">
                        </div>
                        <div class="blog-detail">
                            <h2 class="blog-title"><?= $posts['title'] ?></h2>


                        </div>
                </div>
            </div>
        <?php  };  ?>
        <?php

        $result_db = mysqli_query($conn, "SELECT COUNT(id) FROM post");
        $row_db = mysqli_fetch_row($result_db);
        $total_records = $row_db[0];
        $total_pages = ceil($total_records / $limit);
        /* echo  $total_pages; */
        $pagLink = "            <div class='d-flex flex-co bd-highlight'>
            ";
        for ($i = 1; $i <= $total_pages; $i++) {
            $pagLink .= "<div class='p-2 bd-highlight'>
               <a class='page-link' href='?action=blogs&page=" . $i . "'>" . $i . "</a>
                </div>";
        }
        echo $pagLink . "</div>";
        ?>
        </div>
        </div>
</section>

<!--/ End Blog Single -->

<?php include_once('layouts/footer.php'); ?>