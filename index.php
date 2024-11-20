<?php
require_once __DIR__ . "../env.php";
require_once __DIR__ . "/common/function.php";

//Model
require_once __DIR__ . "/models/BaseModel.php";
require_once __DIR__ . "/models/Category.php";
require_once __DIR__ . "/models/Product.php";
require_once __DIR__ . "/models/ProductVariant.php";

//Controller
require_once __DIR__ . "/controllers/HomeController.php";
require_once __DIR__ . "/controllers/client/ClientCategoryController.php";
require_once __DIR__ . "/controllers/client/AboutController.php";
require_once __DIR__ . "/controllers/client/ContactController.php";
require_once __DIR__ . "/controllers/client/BlogController.php";
require_once __DIR__ . "/controllers/client/AccountController.php";
require_once __DIR__ . "/controllers/client/ProductController.php";


$ctl = $_GET['ctl'] ?? '';

match ($ctl) {
    '', 'home'       => (new HomeController)->index(),
    'category'       => (new ProductController)->list(),
    'about'          => (new AboutController)->index(),
<<<<<<< HEAD
    'shop'           =>(new ProductController)->index(),
    'details'        =>(new ProductController)->detail(),
    'contact'        =>(new ContactController)->index(),
    'blog'           =>(new BlogController)->index(),
    'my-account'     =>(new AccountController)->MyAccount(),
    'sign-in'        =>(new AccountController)->SignIn(),
    'sign-up'        =>(new AccountController)->SignUp(),
=======
    'shop'           => (new ShopController)->index(),
    'single-product' => (new ShopController)->single(),
    'contact'        => (new ContactController)->index(),
    'blog'           => (new BlogController)->index(),
    'my-account' => (new AccountController)->MyAccount(),
    'sign-in'    => $_SERVER['REQUEST_METHOD'] === 'POST'
        ? (new AccountController)->SignIn($_POST['email'], $_POST['password'])
        : (new AccountController)->SignIn(),
    'sign-up'    => $_SERVER['REQUEST_METHOD'] === 'POST'
        ? (new AccountController)->SignUp($_POST['username'], $_POST['email'], $_POST['password'])
        : (new AccountController)->SignUp(),
    'logout' => (new AccountController)->LogOut(),
>>>>>>> 552f2c61625c2b9bf2b0160468e0831f7c15e49a

    default          => view("errors.404"),
};
