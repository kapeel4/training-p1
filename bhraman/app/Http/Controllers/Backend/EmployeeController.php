<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Designation;

class EmployeeController extends Controller
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
        $employees = Employee::with('getDesignation')->get();
        // dd($employees);
        return view('backend.employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $designations = Designation::get();
        return view('backend.employee.create', compact('designations'));
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
            'emp_post_id' => 'required',
            'type' => 'required',
        ]);
        $employee = new Employee();
        $employee->sanket_no = request('sanket_no');
        $employee->name= request('name');
        $employee->office_name= request('office_name');
        $employee->contact_no= request('contact_no');
        $employee->emp_post_id= request('emp_post_id');
        $employee->sanket_no_np = request('sanket_no_np');
        $employee->name_np= request('name_np');
        $employee->office_name_np= request('office_name_np');
        $employee->contact_no_np= request('contact_no_np');
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
        $employees = Employee::find($id);
        $designations = Designation::get();
        return view('backend.employee.edit', compact('employees','designations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $validated = $request->validate([
            'sanket_no' => 'required|unique:employees|max:10',
            'name' => 'required',
            'office_name' => 'required',
            'contact_no' => 'required|max:20',
            'emp_post_id' => 'required',
            'type' => 'required',
        ]);
        $employee = Employee::find($id);
        $employee->sanket_no = request('sanket_no');
        $employee->name= request('name');
        $employee->office_name= request('office_name');
        $employee->contact_no= request('contact_no');
        $employee->emp_post_id= request('emp_post_id');
        $employee->sanket_no_np = request('sanket_no_np');
        $employee->name_np= request('name_np');
        $employee->office_name_np= request('office_name_np');
        $employee->contact_no_np= request('contact_no_np');
        $employee->type= request('type');
        $employee->save();
        return redirect()->route('employee.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect()->route('employee.index');
    }
}
