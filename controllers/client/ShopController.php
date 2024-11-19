<?php
class ShopController{
    public function index(){
        $categories = (new Category)->list() ;
        return view('client.shop.shop',compact('categories'));
    }
    public function single(){
        return view('client.shop.single-product');
    }
}