<?php 
class OrderController{
    public function index(){
        return view('admin.order.list');
    }
    public function show(){
        return view('admin.order.show');
    }
}