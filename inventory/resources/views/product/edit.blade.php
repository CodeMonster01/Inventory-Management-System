@extends('layouts.app')

@section('content')
<div class="container">
<h1>Edit Product information</h1>
<hr>
@if (Session::has('productUpdatedYes'))
	<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		{{ Session::get('productUpdatedYes') }}
	</div>
@endif

<form action="{{url('product/edit/post')}}" method="post" class="form">
@csrf
<input type="hidden" class="form-control" name="id" value="{{$individualProduct -> id}}" > <br>
<input type="text" class="form-control" value="{{$individualProduct->product_name}}" name="product_name" placeholder="edit product name"> <br>
<input type="text" class="form-control" value="{{$individualProduct->product_description}}" name="product_description" placeholder="edit product description"><br>
<input type="text" class="form-control" value="{{$individualProduct->product_category}}" name="product_category" placeholder="edit product category"> <br>
<input type="text" class="form-control" value="{{$individualProduct->product_price}}" name="product_price" placeholder="edit product price"> <br>
<input type="text" class="form-control" value="{{$individualProduct->product_stock}}" name="product_stock" placeholder="edit product stock"> <br>
<input type="text" class="form-control" value="{{$individualProduct->product_quantity}}" name="product_quantity" placeholder="edit product quantity"> <br>
<button type="submit" class="form-control btn btn-success">Update New Data</button> 

</form>

@if($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
	</ul>
</div>
@endif

</div>
@endsection