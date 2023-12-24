<!DOCTYPE html>
<html>
<head>
	<title>First page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
	@include('layouts.navbar')
	<div class="col-md-6">
		<h1>Category<a href="{{route('category.create')}}" class="btn btn-primary">New</a></h1>
    <a href="{{route('category.other')}}">Other</a>
		<table class="table">
      <caption>Optional product.</caption>
      @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        <img src="images/{{ Session::get('image') }}">
        @endif
    
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
      <thead>
        <tr>
          <th>SN</th>
          <th>Title</th>
          <th>Created At</th>
          <th>Image</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <!-- array aauchha data -->
      	@foreach($categories as $category)
        <tr>
          <th scope="row">{{$category->id}}</th>
          <td>{{$category->title}}</td>
          <td>{{$category->created_at}}</td>
          <td><img src="{{asset('image/'.$category->image)}}" class="img-responsive"></td>
          <td>
            <a href="{{route('category.show',$category->id)}}">View</a>
            |
            <a href="{{route('category.edit',$category->id)}}">Edit</a>
            |
            <a href="{{route('category.destroy',$category->id)}}">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
	</div>
  <div class="col-md-6">
    <h1>Product<a href="{{route('product.create')}}" class="btn btn-primary">New</a></h1>
    <table class="table">
      <caption>Optional product.</caption>
      <thead>
        <tr>
          <th>SN</th>
          <th>Name</th>
          <th>Sub Name</th>
          <th>Address</th>
          <th>Created At</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // echo "php";
        ?>
        <!-- array aauchha data -->
        @foreach($products as $qqq)
        <tr>
          <th scope="row">{{$qqq->id}}</th>
          <td>{{$qqq->name}}</td>
          <td>{{$qqq->subname}}</td>
          <td>{{$qqq->address}}</td>
          <td>{{$qqq->created_at}}</td>
          <td>
            <a href="{{route('product.show',$qqq->id)}}">View</a>
            |
            <a href="{{route('product.edit',$qqq->id)}}">Edit</a>
            |
            <a href="{{route('product.destroy',$qqq->id)}}">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<?php

?>

</body>
</html>