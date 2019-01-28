<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('shop.index')->with('products', $products);
    }
}
