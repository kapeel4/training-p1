<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::get();
        return view('backend.employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'sanket_no' => 'required|unique:employees|max:10',
            'name' => 'required',
            'office_name' => 'required',
            'contact_no' => 'required|max:20',
            'emp_post' => 'required',
            'type' => 'required',
        ]);
        $employee = new Employee();
        $employee->sanket_no = request('sanket_no');
        $employee->name= request('name');
        $employee->office_name= request('office_name');
        $employee->contact_no= request('contact_no');
        $employee->emp_post= request('emp_post');
        $employee->sanket_no_np = request('sanket_no_np');
        $employee->name_np= request('name_np');
        $employee->office_name_np= request('office_name_np');
        $employee->contact_no_np= request('contact_no_np');
        $employee->emp_post_np= request('emp_post_np');
        $employee->type= request('type');
        $employee->save();
        return redirect()->route('employee.index');
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