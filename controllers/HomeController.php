<?php
session_start();
class HomeController
{

    public function index()
    {
        // Get data of categories featured
        require_once('models/CategoryProductModel.php');
        $categoriesProductModel = new CategoryProductModel();
        $categoryProduct = $categoriesProductModel->getCategoriesFeatured();

        // Get data of categories sidebar
        $categoriesSidebar = $categoriesProductModel->getCategoriresSideBar();

        // Get data of banners
        require_once('models/BannerModel.php');
        $bannerModel = new BannerModel();
        $bannerItem = $bannerModel->getBannerOfHome();

        // Get data of blogs
        require_once('models/PostModel.php');
        $blogModel = new PostModel();
        $blogItem = $blogModel->getBlogAtHomePage();

        // Get product featured
        require_once('models/ProductModel.php');
        $productModel = new ProductModel();
        $productItem = $productModel->getFeaturedProduct();


        // Call view to return data 
        require_once('views/HomeView.php');
        $homeView = new HomeView();
        $homeView->index($categoryProduct, $categoriesSidebar, $bannerItem, $blogItem, $productItem);
    }

    public function blogs()
    {
        require_once('views/BlogView.php');
        $blogView = new BlogView();
        $blogView->index();
    }

    public function products()
    {
        require_once('views/ProductView.php');
        require_once('models/ProductModel.php');
        require_once('models/CategoryProductModel.php');

        $categoriesProductModel = new CategoryProductModel();
        $categoriesSidebar = $categoriesProductModel->getCategoriresSideBar();

        $productModel = new ProductModel();
        $products = $productModel->getAllProducts();

        $productView = new ProductView();
        $productView->index($products, $categoriesSidebar);
    }

    public function productId($id)
    {
        require_once('views/ProductView.php');
        require_once('models/ProductModel.php');
        $productModel = new ProductModel();
        $product = $productModel->getProductByid($id);

        $productView = new ProductView();
        $productView->detail($product);
    }

    public function contact()
    {
        require_once('views/ContactView.php');
        $blogView = new ContactView();
        $blogView->index();
    }

    public function addToCart()
    {

        $productId = $_POST['product_id'];
        $quantity = $_POST['quantity'];

        require_once('models/ProductModel.php');
        $productModel = new ProductModel();
        $product = $productModel->getProductByid($productId);

        if ($product && $quantity > 0) {
            // Product exists in database, now we can create/update the session variable for the cart
            if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
                if (array_key_exists($productId, $_SESSION['cart'])) {
                    // Product exists in cart so just update the quanity
                    // $_SESSION['cart'][$productId] += $quantity;
                    $_SESSION['cart'][$productId]['quantity'] = $quantity;
                } else {
                    // Product is not in cart so add it
                    $_SESSION['cart'][$productId] = $product;
                }
            } else {
                // There are no products in cart, this will add the first product to cart
                $_SESSION['cart'][$productId] = $product;
            }
        }
        header("Location: ?action=cart");
    }

    public function cart()
    {
        require_once('views/ProductView.php');
        $productView = new ProductView();
        $productView->cart();
    }

    public function order()
    {
        echo "order";
    }

    public function deleteCart($id)
    {
        unset($_SESSION['cart'][$id]);
        header("Location: ?action=cart");
    }
}