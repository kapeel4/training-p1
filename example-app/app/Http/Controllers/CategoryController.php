<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::get();
        $products = Product::get();
        return view('category.index',compact('categories','products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        // dd($request->all());
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('image'), $imageName);

        $category = new Category();
        $category->title = $request['title'];
        $category->price = $request['price'];
        $category->image = $imageName;
        $success = $category->save();
        if($success){
            return redirect()->route('category.index')->with('success','You have successfully upload image.');
        }
        else{
           return redirect()->route('category.index')->with('error','Sorry');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // dd($id);
        $category = Category::find($id);
        return view('category.show', compact(['category']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        return view('category.edit', compact(['category']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::find($id);
        $category->title = $request['title'];
        $category->price = $request['price'];
        $category->save();
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        $success = $category->delete();
        if($success){
            return redirect()->route('category.index');
        }
    }

    public function other(){
        return view('category.other');
    }
}
