<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Header;

class HeaderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $headers = Header::get();
        return view('backend.header.index', compact('headers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.header.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'govt_level' => 'required',
            'ministry_name' => 'required',
            'office_name' => 'required',
            'province_name' => 'required|max:20',
            'office_code' => 'required|unique:headers|max:10',
        ]);

        $header = new Header();
        $header->govt_level = request('govt_level');
        $header->ministry_name= request('ministry_name');
        $header->office_name= request('office_name');
        $header->province_name= request('province_name');
        $header->office_code= request('office_code');
        $header->govt_level_np = request('govt_level_np');
        $header->ministry_name_np= request('ministry_name_np');
        $header->office_name_np= request('office_name_np');
        $header->province_name_np= request('province_name_np');
        $header->office_code_np= request('office_code_np');
        $header->save();
        return redirect()->route('header.index');
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
        $headers = Header::find($id);
        return view('backend.header.edit', compact('headers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $header = Header::find($id);
        $header->govt_level = request('govt_level');
        $header->ministry_name= request('ministry_name');
        $header->office_name= request('office_name');
        $header->province_name= request('province_name');
        $header->office_code= request('office_code');
        $header->govt_level_np = request('govt_level_np');
        $header->ministry_name_np= request('ministry_name_np');
        $header->office_name_np= request('office_name_np');
        $header->province_name_np= request('province_name_np');
        $header->office_code_np= request('office_code_np');
        $header->save();
        return redirect()->route('header.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $header = Header::find($id);
        $header->delete();
        return redirect()->route('header.index');
    }
}
