<?php

$url = $_SERVER['REQUEST_URI'];
$action = isset($_GET['action']) ? $_GET['action'] : "";

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
} else if ($action == 'products') {
    $homeController->products();
} else if ($action == 'contact') {
    $homeController->contact();
} else if (strstr($action, 'productId')) {
    $id = explode('-', strstr($action, 'productId'));
    $homeController->productId($id[1]);
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
}