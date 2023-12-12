<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbcController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd("here");
        $xyz = 4+10;
        return view('welcome', compact('xyz'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd("here");
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
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
