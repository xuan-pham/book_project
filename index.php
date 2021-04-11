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
} else if ($action == 'admin-author') {
    $adminController->author();
} else if ($action == 'userlist') {
    $adminController->userlist();
} else if ($action == 'user-detele') {
    $adminController->delete();
}
 else if ($action == 'admin-product') {
    $adminController->products();
}else if ($action == 'admin-add-product') {
    $adminController->addproducts();
} else if ($action == 'user-fix') {
    $adminController->fixuser();
} else if ($action == 'user-add') {
    $adminController->adduser();
}
