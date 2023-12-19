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
	<div class="col-md-10">
		<h1>Category<a href="{{route('category.create')}}">Create New Category</a></h1>
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
		<form method="POST" action="{{route('category.store')}}" enctype="multipart/form-data">
      @csrf()
 <div class="form-group">
    <label for="title">Title:</label>
    <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
 </div>
 <div class="form-group">
    <label for="price">Prices:</label>
    <input type="text" class="form-control" name="price" id="price" placeholder="Enter price">
 </div>
 <div class="form-group">
    <label for="image">Image:</label>
    <input type="file" class="form-control" name="image" id="image" placeholder="Enter image">
 </div>
 <button type="submit" class="btn btn-primary">Submit</button>
</form>
	</div>
</div>


</body>
</html>