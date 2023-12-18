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
		<h1>Product<a href="{{route('product.create')}}">Create New Product</a></h1>
		@foreach($products as $product)
		<form method="POST" action="{{route('product.update', $product->id)}}">
			@csrf()
 <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" value="{{$product->name}}">
 </div>
 <div class="form-group">
    <label for="subname">Subname:</label>
    <input type="text" class="form-control" name="subname" id="subname" placeholder="Enter subname" value="{{$product->subname}}">
 </div>
 <div class="form-group">
    <label for="address">Address:</label>
    <input type="text" class="form-control" name="address" id="address" placeholder="Enter address" value="{{$product->address}}">
 </div>
 <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endforeach
	</div>
</div>


</body>
</html>