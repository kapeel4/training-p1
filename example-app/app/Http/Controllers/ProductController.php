<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wwww = Product::orderBy('id','DESC')->get();
        return view('product-index', compact('wwww'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view('product-create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request['name']);
        $product = new Product();
        $product->name = $request['name'];
        $product->subname = $request['subname'];
        $product->address = $request['address'];
        $product->category = $request['category'];
        $success = $product->save();
        if($success){
            return redirect()->route('product.index');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // dd($id);
        $products = Product::orderBy('id','DESC')->where('id',$id)->get();
        return view('product-show', compact('products'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $products = Product::orderBy('id','DESC')->where('id',$id)->get();
        $categories = Category::get();
        return view('product-edit', compact('products','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($id);
        $product = Product::find($id);
        $product->name = $request['name'];
        $product->subname = $request['subname'];
        $product->address = $request['address'];
        $success = $product->save();
        if($success){
            return redirect()->route('product.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd($id);
        $product = Product::find($id);
        $success = $product->delete();
        if($success){
            return redirect()->route('product.index');
        }
    }
}
