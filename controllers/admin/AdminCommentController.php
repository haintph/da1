<?php
//Dieu khien san pham
require_once __DIR__ . '/../../models/Comment.php';
class AdminCommentController
{
    public function index()
    {
        $comments = (new Comment)->list();
        return view('admin.comments.list', compact('comments'));
    }
    public function create()
    {
        $categories = (new Category)->list();
        return view('admin.products.add', compact('categories'));
    }
    public function store()
    {
        $data = $_POST;

        $data['img_product'] = '';

        if (isset($_FILES['img_product']) && $_FILES['img_product']['size'] > 0) {
            $file = $_FILES['img_product'];

            $image = $file['name'];

            if (move_uploaded_file($file['tmp_name'], "../images/" . $image)) {
                $data['img_product'] = $image; // Gán tên ảnh vào dữ liệu
            } else {
                $data['img_product'] = '';
            }
        }
        // if (empty($data['product_name']) || empty($data['category_id']) || empty($data['price']) || empty($data['quantity']) || empty($data['status']) || empty($data['description'])) {
        //     echo "Vui lòng điền đầy đủ thông tin.";
        //     return;
        // }

        $product = new Product;
        $product->create($data);

        header("location: " . ADMIN_URL . "?ctl=listsp");
        exit();
    }

    public function delete() {}
}