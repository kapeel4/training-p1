@extends('layouts.app')
@push('style')
<link
href="http://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/css/nepali.datepicker.v4.0.1.min.css"
rel="stylesheet" type="text/css"/>
@endpush
@section('content')

<h1>Table</h1><a href="{{route('category.create')}}" class="btn btn-primary">New</a>
<form method="POST" action="{{route('category.store')}}" enctype="multipart/form-data">
      @csrf()
 <div class="form-group">
    <label for="nepali-datepicker">Title:</label>
    <input type="text" class="form-control" name="title" id="nepali-datepicker" placeholder="Enter title">
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

@endsection

@push('js')
<script
src="http://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/js/nepali.datepicker.v4.0.1.min.js"
type="text/javascript"></script>
<script type="text/javascript">
window.onload = function() {
  var mainInput = document.getElementById("nepali-datepicker");
    mainInput.nepaliDatePicker();
};
</script>
@endpush