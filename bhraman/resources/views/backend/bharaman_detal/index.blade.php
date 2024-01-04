@extends('layouts-backend.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Bharaman Detail</h1>
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
                        <h3 class="card-title">Bharaman Detail Config 
                        <a class="btn btn-block btn-primary" href="{{route('bharam.create')}}">Create New</a></h3>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Fiscal Year</th>
                                    <th>Aadesh No</th>
                                    <th>Employee</th>
                                    <th>Visit Address</th>
                                    <th>Visit Purpose</th>
                                    <th>Date From</th>
                                    <th>Date To</th>
                                    <th>Peski</th>
                                    <th>Vehicle</th>
                                    <th style="width: 150px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bharamandetails as $bharamandetail)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$bharamandetail->getFiscal->name}}</td>
                                    <td>{{$bharamandetail->aadesh_no}}</td>
                                    <td>{{$bharamandetail->getEmployee->name}}</td>
                                    <td>{{$bharamandetail->visit_address}}</td>
                                    <td>{{$bharamandetail->visit_purpose}}</td>
                                    <td>{{$bharamandetail->visit_date_from}}</td>
                                    <td>{{$bharamandetail->visit_date_to}}</td>
                                    <td>{{$bharamandetail->peski}}</td>
                                    <td>
                                        @if($bharamandetail->visit_vehicle ==1)
                                            Office
                                        @elseif($bharamandetail->visit_vehicle ==2)
                                            Public
                                        @else
                                            Rental
                                        @endif
                                    </td>
                                    <td><span class="badge bg-info"><a href="{{route('fiscal.edit',$bharamandetail->id)}}">Edit</a></span> <span class="badge bg-danger"><a href="{{route('fiscal.destroy',$bharamandetail->id)}}">Delete</a></span> <span class="badge bg-info"><a href="{{route('bharam.bill',$bharamandetail->id)}}">Bill</a></span></td>
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