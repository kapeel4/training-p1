<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wwww = Product::orderBy('id','DESC')->get();
        // SELECT
        //   *
        // FROM
        //   `products`
        // ORDER BY
        //   `ids` DESC
        return view('product-index', compact('wwww'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd("here");
        return view('product-create');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
