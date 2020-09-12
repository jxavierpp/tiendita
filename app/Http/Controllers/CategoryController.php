<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return redirect('/categories');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        // dd($request);
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();

        return redirect('/categories');
        
    }

    public function destroy($id)
    {   
        Category::destroy($id);
        return redirect('/categories');
    }
}
