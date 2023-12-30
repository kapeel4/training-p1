@extends('layouts-backend.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Header</h1>
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
                        <h3 class="card-title">Header Config 
                        <a class="btn btn-block btn-primary" href="{{route('header.create')}}">Create New</a></h3>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Govent Level</th>
                                    <th>Ministry name</th>
                                    <th>Office Name</th>
                                    <th>Province Name</th>
                                    <th>Office Code</th>
                                    <th style="width: 40px">Label</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($headers as $header)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$header->govt_level}} <span class="text-info">{{$header->govt_level_np}}</span></td>
                                    <td>{{$header->ministry_name}} | {{$header->ministry_name_np}}</td>
                                    <td>{{$header->office_name}} | {{$header->office_name_np}}</td>
                                    <td>{{$header->govt_level}} | {{$header->govt_level_np}}</td>
                                    <td>{{$header->office_code}} | {{$header->office_code_np}}</td>
                                    <td><span class="badge bg-info"><a href="{{route('header.edit',$header->id)}}">Edit</a></span> <span class="badge bg-danger"><a href="{{route('header.destroy',$header->id)}}">Delete</a></span></td>
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