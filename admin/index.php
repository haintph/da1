<?php
<<<<<<< HEAD
session_start();
require_once __DIR__ . "/../env.php";
=======
require_once __DIR__ . "../../middleware.php";
require_once __DIR__ . "../../env.php";
>>>>>>> 552f2c61625c2b9bf2b0160468e0831f7c15e49a
require_once __DIR__ . "/../common/function.php";
//include model
require_once __DIR__ . "/../models/BaseModel.php";
require_once __DIR__ . "/../models/Category.php";
require_once __DIR__ . "/../models/Product.php";
require_once __DIR__ . "/../models/ProductVariant.php";
//include controller
require_once __DIR__ . "/../controllers/admin/AdminProductController.php";
require_once __DIR__ . "/../controllers/admin/AdminCategoryController.php";
require_once __DIR__ . "/../controllers/admin/AdminUserController.php";
require_once __DIR__ . "/../controllers/admin/ProductVariantController.php";
require_once __DIR__ . "/../controllers/admin/OrderController.php";
require_once __DIR__ . "/../controllers/admin/AdminCommentController.php";
checkAdmin();
$ctl = $_GET['ctl'] ?? "";
match ($ctl) {
    "" => view("admin.dashboard"),
    //product
    "listsp"    => (new AdminProductController)->index(),
    "addsp"     => (new AdminProductController)->create(),
    'storesp'   => (new AdminProductController)->store(),
    "editsp"     => (new AdminProductController)->edit(),
    "updatesp"  => (new AdminProductController)->update(),
    'deletesp'  => (new AdminProductController)->delete(),
    //category
    "listcate"  => (new AdminCategoryController)->index(),
    "addcate"   => (new AdminCategoryController)->create(),
    "storecate" => (new AdminCategoryController)->store(),
    "editcate"  => (new AdminCategoryController)->edit(),
    "updatecate" =>(new AdminCategoryController)->update(),
    "deletecate"  => (new AdminCategoryController)->delete(),
    //productVariant
    "listpv" =>(new ProductVariantController )->index(),
    "addvariant" =>(new ProductVariantController )->create(),
    "storevariant" =>(new ProductVariantController )->store(),
    //user
    "listuser"  => (new AdminUserController)->index(),
    "edit"  => (new AdminUserController)->formEdit(),
    "user/edit"  => (new AdminUserController)->edit(),
    //order
    "list-order" => (new OrderController)->index(),
    "show-order" => (new OrderController)->show(),
<<<<<<< HEAD


=======
    //comments
    "list-comments"  => (new AdminCommentController)->index(),
>>>>>>> 552f2c61625c2b9bf2b0160468e0831f7c15e49a
    default => view("errors.404"),
};
