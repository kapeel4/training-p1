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
                    <form method="POST" action="{{route('header.store')}}">
                        @csrf()
                        <div class="card-body">

                            <label for="govt_level">Governemnt Level</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="govt_level" placeholder="Enter Governemnt Level En">
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="govt_level_np" placeholder="Enter Governemnt Level np">
                                    </div>

                                </div>
                            </div>
                            <label for="ministry_name">Ministry Name</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="ministry_name" placeholder="Enter Ministry Name En">
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="ministry_name_np" placeholder="Enter Ministry Name np">
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
                            <label for="province_name">Province Name</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="province_name" placeholder="Enter Province Name En">
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="province_name_np" placeholder="Enter Province Name np">
                                    </div>

                                </div>
                            </div>
                            <label for="office_code">Office Code</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="number" class="form-control" name="office_code" placeholder="Enter Office Code En">
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="number" class="form-control" name="office_code_np" placeholder="Enter Office Code np">
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