@extends('layouts-backend.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Header Create</h1>
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
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Create</h3>
                    </div>
                    <form method="POST" action="{{route('header.store')}}">
                        @csrf()
                        <div class="card-body">
                            <div class="form-group">
                                <label for="govt_level">Governemnt Level</label>
                                <input type="text" class="form-control" id="govt_level" name="govt_level" placeholder="Enter Governemnt Level">
                            </div>
                            <div class="form-group">
                                <label for="ministry_name">Ministry Name</label>
                                <input type="text" class="form-control" id="ministry_name" name="ministry_name" placeholder="Ministry Name">
                            </div>
                            <div class="form-group">
                                <label for="office_name">Office Name</label>
                                <input type="text" class="form-control" id="office_name" name="office_name" placeholder="Office Name">
                            </div>
                            <div class="form-group">
                                <label for="province_name">Province Name</label>
                                <input type="text" class="form-control" id="province_name" name="province_name" placeholder="Province Name">
                            </div>
                            <div class="form-group">
                                <label for="office_code">Office Code</label>
                                <input type="number" class="form-control" id="office_code" name="office_code" placeholder="Office Code">
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