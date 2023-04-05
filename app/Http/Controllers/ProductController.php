<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('products', [
            "title" => "All products",
            //"products" => Product::all()
            "products" => Product::latest()->get()
        ]);
    }

    public function show(Product $product)
    {
        return view('product', [
            "title" => "Single Post",
            "product" => $product
        ]);
    }
}
