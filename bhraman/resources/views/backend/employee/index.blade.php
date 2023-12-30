@extends('layouts-backend.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Employee</h1>
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
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Employee Config 
                        <a class="btn btn-block btn-primary" href="{{route('employee.create')}}">Create New</a></h3>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Sanket No</th>
                                    <th>Employee name</th>
                                    <th>Office Name</th>
                                    <th>Contact No</th>
                                    <th>Post</th>
                                    <th>Type</th>
                                    <th style="width: 40px">Label</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($employees as $employee)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$employee->sanket_no}} <span class="text-info">{{$employee->sanket_no_np}}</span></td>
                                    <td>{{$employee->name}} | {{$employee->name_np}}</td>
                                    <td>{{$employee->office_name}} | {{$employee->office_name_np}}</td>
                                    <td>{{$employee->contact_no}} | {{$employee->contact_no_np}}</td>
                                    <td>{{$employee->emp_post}} | {{$employee->emp_post_np}}</td>
                                    <td>{{$employee->type}} | {{$employee->type_np}}</td>
                                    <td><span class="badge bg-info"><a href="{{route('header.edit',$employee->id)}}">Edit</a></span> <span class="badge bg-danger"><a href="{{route('header.destroy',$employee->id)}}">Delete</a></span></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">«</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">»</a></li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
@endsection