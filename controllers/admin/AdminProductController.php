<?php
//Dieu khien san pham
class AdminProductController
{
    //Hien thi danh sach san pham
    public function index()
    {
        $products = (new Product)->all();
        return view('admin.products.list', compact('products'));
    }
    //Hien thi form them
    public function create()
    {
        $categories = (new Category)->list();
        return view('admin.products.add', compact('categories'));
    }
    //Them du lieu
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
