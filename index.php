<?php

$url = $_SERVER['REQUEST_URI'];
$action = $_GET['action'];

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
}
// Admin Page

else if ($action == 'login') {
    $adminController->login();
} else if ($action == 'logout') {
    $adminController->logout();
} else if ($action == 'dashboard') {
    $adminController->index();
}