<?php
class ProductController
{
    public function index()
    {
        $categories = (new Category)->list();
        $products = (new Product)->all();

        // Lấy biến thể cho mỗi sản phẩm
        foreach ($products as &$product) {
            $product['variants'] = (new ProductVariant)->findByProductId($product['id']);
        }

        return view('client.products.shop', compact('products', 'categories'));
    }

    public function list()
    {
        $id = $_GET['id'];
        $products = (new Product)->listProductInCategory($id);
        $category = (new Category)->find($id);
        $title = (new Category)->show($id);
        $title = $title['category_name'];
        $categories = (new Category)->list();

        return view(
            'client.products.category_list',
            compact('products', 'title', 'categories')
        );
    }

    public function detail()
    {
        $id = $_GET['id'];
        $product = (new Product)->find($id);
        $title = $product['product_name'] ?? '';
        $categories = (new Category)->list();
        $user = (new AuthModel)->findUserById($_SESSION['user_id']);
        $commentListByProducts = (new Comment)->getCommentsByProductId($id);
        if (!$commentListByProducts) {
            $commentListByProducts = [];
        }
        $product['variants'] = (new ProductVariant)->findByProductId($id);
        return view(
            'client.products.details',
            compact('product', 'title', 'categories', 'commentListByProducts', 'user')
        );
    }
}
