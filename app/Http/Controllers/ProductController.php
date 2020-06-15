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

    // create function allow ass to create new product
    public function create(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        
        // call the save function to save the product to the database
        $product->save();
        return response()->json($product);
    }

    // update function to update the selected product info
    public function update(Request $request,$id){
        // get the prodcut from database
        $product = Product::find($id);

        // update the product item
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');

        // save the updated product
        $product->save();
        return response()->json($product);

    }
}
