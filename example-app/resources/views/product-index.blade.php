@extends('layouts.app')
@section('content')
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
        <!-- array aauchha data -->
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
@endsection