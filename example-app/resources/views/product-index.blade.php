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
      	@foreach($wwww as $qqq)
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


</body>
</html>