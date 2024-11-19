<?php
class HomeController
{
    public function index()
    {
        $categories = (new Category)->list() ;
        return view("client.home",compact('categories'));
    }
}