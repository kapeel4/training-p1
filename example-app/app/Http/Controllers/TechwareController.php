<?php

namespace App\Http\Controllers;

use App\Models\Techware;
use Illuminate\Http\Request;
use App\Models\Category;

class TechwareController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd("1");
        $categories = Category::get();
        // dd($categories);
        // var_dump('expression');
        // print_r('expression');
        return view('techware.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Techware $techware)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Techware $techware)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Techware $techware)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Techware $techware)
    {
        //
    }

    public function link(){
        return view('link.index');
    }
}
