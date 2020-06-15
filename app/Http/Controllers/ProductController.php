<?php

namespace App\Http\Controllers;

use App\Product;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    // index function must return all the products
    public function index(){
        $products = Product::all();
        return response()->json($products);
    }
}
