<?php
session_start();
require_once __DIR__ . "/../env.php";
require_once __DIR__ . "/../common/function.php";

//include model
require_once __DIR__ . "/../models/BaseModel.php";
require_once __DIR__ . "/../models/Category.php";
require_once __DIR__ . "/../models/Product.php";
//include controller
require_once __DIR__ . "/../controllers/admin/AdminProductController.php";
require_once __DIR__ . "/../controllers/admin/AdminCategoryController.php";
require_once __DIR__ . "/../controllers/admin/AdminUserController.php";
require_once __DIR__ . "/../controllers/admin/OrderController.php";
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
    //user
    "listuser"  => (new AdminUserController)->index(),
    //order
    "list-order" => (new OrderController)->index(),
    "show-order" => (new OrderController)->show(),


    default => view("errors.404"),
};
