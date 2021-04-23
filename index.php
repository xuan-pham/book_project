<?php

$url = $_SERVER['REQUEST_URI'];
$action = isset($_GET['action']) ? $_GET['action'] : "";
$search = isset($_GET['search']) ? $_GET['search'] : "";


if ($url == "/book_project/") {
    header('Location: /book_project/?action=home');
}

require_once 'controllers/HomeController.php';
require_once 'controllers/AdminController.php';

// file nay chay dau tien no chay vo file HomeController
$homeController = new HomeController;
$adminController = new AdminController;

// Home Page
if ($action == 'home') {
    $homeController->index();
} else if ($action == 'blogs') {
    $homeController->blogs();
}

else if (strstr($action, 'postId')) {
    $id = explode('-', strstr($action, 'postId'));
    $homeController->blogDetail($id[1]);
} else if (strstr($action, 'postCategoryId')) {
    $id = explode('-', strstr($action, 'postCategoryId'));
    $homeController->postByCategoryId($id[1]);
}else if (strstr($action, 'productCategoryId')) {
    $id = explode('-', strstr($action, 'productCategoryId'));
    $homeController->productByCategoryId($id[1]);
}else if ($action == 'products') {
    $homeController->products();
} else if ($action == 'contact') {
    $homeController->contact();
} else if (strstr($action, 'productId')) {
    $id = explode('-', strstr($action, 'productId'));
    $homeController->productId($id[1]);
} else if ($action == 'addToCart') {
    $homeController->addToCart();
} else if ($action == 'cart') {
    $homeController->cart();
} else if ($action == 'order') {
    $homeController->order();
} else if ($action == 'payment') {
    $homeController->payment();
} else if (strstr($action, 'deleteCartId')) {
    $id = explode('-', strstr($action, 'deleteCartId'));
    $homeController->deleteCart($id[1]);
} else if ($action == 'success') {
    $homeController->success();
} else if (isset($_GET['search'])) {
    $homeController->search();
}


// Admin Page

else if ($action == 'login') {
    $adminController->login();
} else if ($action == 'logout') {
    $adminController->logout();
} else if ($action == 'dashboard') {
    $adminController->index();
} else if ($action == 'admin-publisher') {
    $adminController->publisher();
} else if ($action == 'admin-add-publisher') {
    $adminController->addPublisher();
} else if ($action == 'admin-delete-publisher') {
    $adminController->deletePublisher();
} else if ($action == 'admin-edit-publisher') {
    $adminController->editPublisher();
} else if ($action == 'admin-author') {
    $adminController->author();
} else if ($action == 'admin-add-author') {
    $adminController->addAuthor();
} else if ($action == 'admin-delete-author') {
    $adminController->deleteAuthor();
} else if ($action == 'admin-edit-author') {
    $adminController->editAuthor();
} else if ($action == 'userlist') {
    $adminController->userlist();
} else if ($action == 'user-delete') {
    $adminController->delete();
} else if (strstr($action, 'fixuserId')) {
    $adminController->fixuser();
} else if ($action == 'user-add') {
    $adminController->adduser();
} else if ($action == 'admin-product') {
    $adminController->productList();
} else if ($action == 'admin-add-product') {
    $adminController->addproduct();
} else if ($action == 'admin-edit-product') {
    $adminController->editProduct();
} else if ($action == 'admin-post') {
    $adminController->PostList();
} else if ($action == 'admin-add-post') {
    $adminController->addPost();
} else if ($action == 'admin-edit-post') {
    $adminController->editPost();
} else if ($action == 'admin-productCategory') {
    $adminController->productCategoryList();
} else if ($action == 'admin-add-productCategory') {
    $adminController->addProductCategory();
} else if ($action == 'admin-edit-productCategory') {
    $adminController->editProductCategory();
} else if ($action == 'admin-postCategory') {
    $adminController->postCategoryList();
} else if ($action == 'admin-add-postCategory') {
    $adminController->addPostCategory();
} else if ($action == 'admin-edit-postCategory') {
    $adminController->editPostCategory();
} else if ($action == 'admin-setting') {
    $adminController->setting();
} else if ($action == 'admin-add-setting') {
    $adminController->addSetting();
} else if ($action == 'admin-edit-setting') {
    $adminController->editSetting();
} else if ($action == 'admin-delete-setting') {
    $adminController->deleteSetting();
} else if ($action == 'admin-order') {
    $adminController->order();
} else if ($action == 'admin-edit-order') {
    $adminController->editOrder();
} else if ($action == 'admin-order-detail') {
    $adminController->orderDetail();
} else if ($action == 'admin-edit-postCategory') {
    $adminController->editPostCategory();
} else {
    echo "404 ERROR";
}