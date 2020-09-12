<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function create()
    {   
        $categories = Category::all();
        return view('product.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $product = new Product();
        $product->name = $request->name;
        $product->cost = $request->cost;
        $product->inventory = $request->inventory;
        $product->availability = $request->availability;
        $product->category_id = $request->category_id;
        $product->save();

        return redirect('/products');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('product.edit', compact('product','categories'));
    }

    public function update(Request $request, $id)
    {
        // dd($request);
        $product = Product::find($id);
        $product->name = $request->name;
        $product->cost = $request->cost;
        $product->inventory = $request->inventory;
        $product->availability = $request->availability;
        $product->category_id = $request->category_id;
        $product->save();

        return redirect('/products');
        
    }

    public function destroy($id)
    {   
        Product::destroy($id);
        return redirect('/products');
    }
}
