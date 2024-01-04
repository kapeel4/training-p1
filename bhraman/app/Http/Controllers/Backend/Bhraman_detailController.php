<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\Helper;
use App\Models\Employee;
use App\Models\Fiscalyear;
use App\Models\BhramanDetail;

class Bhraman_detailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // $request['slug'] = $this->helper->date_np_con();
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bharamandetails = BhramanDetail::with('getFiscal','getEmployee')->orderBy('id','DESC')->get();
        return view('backend.bharaman_detal.index',compact('bharamandetails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = Employee::get();
        $fiscals = Fiscalyear::get();
        return view('backend.bharaman_detal.create', compact('employees','fiscals'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $detail = new BhramanDetail();
        $org_addesh_no = BhramanDetail::count();
        if($org_addesh_no == 0){
            $adesh_no = 1;
        }
        else{
            $adesh_no = $org_addesh_no+1;
        }
        $detail->aadesh_no = $adesh_no;
        $detail->aadesh_no_np = $adesh_no;
        $detail->fiscal_year = request("fiscal_year");
        $detail->employee_id = request("employee_id");
        $detail->visit_vehicle = request("vehicle_id");
        $detail->visit_address = request("visit_address");
        $detail->visit_address_np = request("visit_address_np");
        $detail->visit_purpose = request("visit_purpose");
        $detail->visit_purpose_np = request("visit_purpose_np");
        $detail->visit_date_from = $this->helper->date_eng_con_parm(request("visit_date_from_np"));
        $detail->visit_date_from_en = request("visit_date_from_np");
        $detail->visit_date_to = request("visit_date_to_np");
        $detail->visit_date_to_en = $this->helper->date_eng_con_parm(request("visit_date_to_np"));
        $detail->peski = request("peski");
        $detail->peski_np = request("peski_np");
        $detail->more_info = request("more_info");
        $detail->more_info_np = request("more_info_np");
        $detail->save();
        return redirect()->route('bharam.index');
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
