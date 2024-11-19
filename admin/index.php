<?php
require_once __DIR__ . "../../middleware.php";
require_once __DIR__ . "../../env.php";
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
require_once __DIR__ . "/../controllers/admin/AdminCommentController.php";
checkAdmin();
$ctl = $_GET['ctl'] ?? "";
match ($ctl) {
    "" => view("admin.dashboard"),
    //product
    "listsp"    => (new AdminProductController)->index(),
    "addsp"     => (new AdminProductController)->create(),
    'storesp'   => (new AdminProductController)->store(),
    'deletesp'  => (new AdminProductController)->delete(),
    //category
    "listcate"  => (new AdminCategoryController)->index(),
    "addcate"   => (new AdminCategoryController)->create(),
    "storecate" => (new AdminCategoryController)->store(),
    "editcate"  => (new AdminCategoryController)->update(),
    //user
    "listuser"  => (new AdminUserController)->index(),
    "edit"  => (new AdminUserController)->formEdit(),
    "user/edit"  => (new AdminUserController)->edit(),
    //order
    "list-order" => (new OrderController)->index(),
    "show-order" => (new OrderController)->show(),
    //comments
    "list-comments"  => (new AdminCommentController)->index(),
    default => view("errors.404"),
};
