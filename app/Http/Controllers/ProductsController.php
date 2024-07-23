<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $title = 'Welcome to Products Page';
        // return view('products.index', compact('title'));
        $name = 'John Doe';
        // return view('products.index')-> with('name', $name);
        $myphone = [
            'name' => 'iPhone 12',
            'year' => 2020,
        ];
        // return view('products.index', compact('myphone'));
        print_r(route('products'));
        return view('products.index');

    }
   public function about(){
    return "This is about page";
   }
    public function detail($productName, $id)
    {
        // return "This is product detail page for product with id: $id";
        // $phone = [
        //     'iphone' => 'iphone 12',
        //     'samsung' => 'samsung galaxy s21',
        //     'oppo' => 'oppo f9',
        // ];
        // return view ('products.index', [
        //     'product' => $phone[$productName] ?? 'unknown product',
        // ]);

        return "product name = ".$productName ."product id = ".$id;
    }
}
