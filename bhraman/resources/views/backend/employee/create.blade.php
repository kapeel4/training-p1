@extends('layouts-backend.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Employee Create</h1>
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
                            <label for="sanket_no">Sanket No</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="sanket_no" placeholder="Enter Sanket No En">
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="sanket_no_np" placeholder="Enter Sanket No np">
                                    </div>

                                </div>
                            </div>
                            <label for="name">Employe Name</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="name" placeholder="Enter Employe Name En">
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="name_np" placeholder="Enter Employe Name np">
                                    </div>

                                </div>
                            </div>
                            <label for="office_name">Office Name</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="office_name" placeholder="Enter Office Name En">
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="office_name_np" placeholder="Enter Office Name np">
                                    </div>

                                </div>
                            </div>
                            <label for="contact_no">Contact No</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="contact_no" placeholder="Enter Contact No En">
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="contact_no_np" placeholder="Enter Contact No np">
                                    </div>

                                </div>
                            </div>
                            <label for="emp_post">Employee Post</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        @foreach($designations as $designation)
                                        <select class="form-control" name="emp_post_id">
                                            <option value="{{$designation->id}}">{{$designation->name}}</option>
                                        </select>
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                            <label for="type">Type</label>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <select class="form-control" name="type">
                                            <option value="">--Please choose one--</option>
                                            <option value="1">Employee</option>
                                            <option value="2">Recommend</option>
                                            <option value="3">Approve</option>
                                        </select>
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