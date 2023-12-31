@extends('layouts-backend.app')
@push('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Bharaman Create</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Starter Page</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Create</h3>
                    </div>
                    <form method="POST" action="{{route('employee.store')}}">
                        @csrf()
                        <div class="card-body">
                            <label for="fiscal_year">Fiscal Year</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="fiscal_year" placeholder="Enter Fiscal Year En">
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="fiscal_year_np" placeholder="Enter Fiscal Year np">
                                    </div>

                                </div>
                            </div>
                            <label for="approval_date">Approval Date</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="approval_date" placeholder="Enter Approval Date En">
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="approval_date_np" placeholder="Enter Approval Date np">
                                    </div>

                                </div>
                            </div>
                            <label for="employee_id">Employee</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <select class="form-control" id="employee_id" name="employee_id">
                                            @foreach($employees as $employee)
                                            <option value="{{$employee->id}}">{{$employee->name}} ({{$employee->sanket_no}})</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <label for="vehicle_id">Vehicle</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <select class="form-control" name="vehicle_id">
                                            <option value="1">Office</option>
                                            <option value="2">Public</option>
                                            <option value="3">Rental</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <label for="visit_address">Visit Address</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="visit_address" placeholder="Enter Visit Address En">
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="visit_address_np" placeholder="Enter Visit Address np">
                                    </div>

                                </div>
                            </div>
                            <label for="visit_purpose">Visit Purpose</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="visit_purpose" placeholder="Enter Visit Purpose En">
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="visit_purpose_np" placeholder="Enter Visit Purpose np">
                                    </div>

                                </div>
                            </div>
                            <label for="visit_date_from">Date</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="visit_date_from_np" placeholder="Enter Visit Date From">
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="visit_date_to_np" placeholder="Enter Visit Date To">
                                    </div>

                                </div>
                            </div>
                            <label for="peski">Peski</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="peski" placeholder="Enter Visit Peski From">
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="peski_np" placeholder="Enter Visit Peski To">
                                    </div>

                                </div>
                            </div>
                            <label for="more_info">Detail</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="more_info" placeholder="Enter Visit Detail From">
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="more_info_np" placeholder="Enter Visit Detail To">
                                    </div>

                                </div>
                            </div>
                            
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Info Section</h3>
                    </div>
            </div>

        </div>

    </div>
</section>
@endsection
@push('js')


    
@endjs