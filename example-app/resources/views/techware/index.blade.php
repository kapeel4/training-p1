@extends('layouts.app')
@push('style')
<link rel="stylesheet" type="text/css" href="{{asset('css/lightbox.css')}}">
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css">
@endpush
@section('content')
<h1>Table</h1><a href="{{route('category.create')}}" class="btn btn-primary">New</a>
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
      	@foreach($categories as $category)
        <tr>
          <th scope="row">{{$category->id}}</th>
          <td>{{$category->title}}</td>
          <td>{{$category->created_at}}</td>
          <td>
          	<a href="{{asset('image/'.$category->image)}}"  data-lightbox="image-1" data-title="My caption">
          		<img src="{{asset('image/'.$category->image)}}" style="width: 100px; height: 100px;" class="img-responsive" >
          	</a>
          </td>
          <td>
            <a href="{{route('category.show',$category->id)}}" id="view">View</a>
            |
            <a href="{{route('category.edit',$category->id)}}">Edit</a>
            |
            <a href="#" id="btn-delete" data-ids="{{$category->id}}">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
<p>asdf asdfa</p>
@endsection

@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.16.0/prism.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.16.0/plugins/unescaped-markup/prism-unescaped-markup.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox-plus-jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
<script>
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })
</script>
<script type="text/javascript" language="javascript">  
	$('body').on('click', '#view', function () {
 		$("p").css("background-color", "cyan");  
 	});
 </script>
<script type="text/javascript">
	$('body').on('click', '#btn-delete', function () {
    var user_id = $(this).data("ids");
    console.log(user_id);
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajaxSetup({
			    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
			});
            $.ajax({
                type: "DELETE",
                url: "{{ route('category.destroy', ['id' => '__USER_ID__']) }}".replace('__USER_ID__', user_id),
                success: function(data) {
                	console.log(data);
                    var icon = data.success ? 'success' : 'error';
                    $.toast({
                        icon: icon,
                        text: data.message
                    });
                    if (data.success) {
                        // result_table.draw();
                    }
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        }
    });
});
</script>
@endpush