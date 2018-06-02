@extends('adminlte::page')

@section('content')
<div class="container">

<!-- @if (Session::has('productDeletedYes'))
	<div class="alert alert-danger alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		{{ Session::get('productDeletedYes') }}
	</div>
@endif -->
<div class="box-body table-responsive">

    <table class="table table-striped table-hover table-responsive dataTable" id="siswa-table">
    <thead>

        <tr>
            <th>id</th>
            <th>Photo Title</th>
            <th>Photo</th>
            <th>Product Button Link</th>
            <th>Created At</th>
            <th>Updated At</th>
       
        </tr>

    </thead>

    <tbody>    
@foreach($individualSetting as $insertedSetting)
    <tr>
        <td> {{$insertedSetting->id}} </td>
        <td> {{$insertedSetting->pic_title}} </td>
        <td><img src="{{url('uploads')}}/{{$insertedSetting->product_pic}}"></td>
        <td> {{$insertedSetting->button_link}} </td>
        <td> {{$insertedSetting->created_at}} </td>
        
    </tr> 
@endforeach   
    </tbody>
</table>

</div>
   
<hr>
  
</div>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('css/admin_costom.css')}}">



@endsection