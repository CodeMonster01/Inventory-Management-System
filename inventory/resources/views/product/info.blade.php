@extends('adminlte::page')

@section('content')
<div class="container">

@if (Session::has('productDeletedYes'))
	<div class="alert alert-danger alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		{{ Session::get('productDeletedYes') }}
	</div>
@endif
<div class="box-body table-responsive">

    <table class="table table-striped table-hover table-responsive dataTable" id="siswa-table">
    <thead>

        <tr>
            <th>id</th>
            <th>Product Name</th>
            <th>Product Description</th>
            <th>Product Category</th>
            <th>Product Price</th>
            <th>Product Stock</th>
            <th>Product Quantity</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>View</th>
       
        </tr>

    </thead>

    <tbody>    
@foreach($allProducts as $singleProducts)
    <tr>
        <td> {{$singleProducts->id}} </td>
        <td> {{$singleProducts->product_name }} </td>
        <td> {{$singleProducts->product_description }} </td>
        <td> {{$singleProducts->product_category }} </td>
        <td> {{$singleProducts->product_price }} </td>
        <td> {{$singleProducts->product_stock }} </td>
        <td> {{$singleProducts->product_quantity }} </td>
        <td> {{$singleProducts->created_at }} </td>
        <td> {{$singleProducts->updated_at or 'Not Updated'}} </td>
        <td><a class="btn btn-info" href="{{route('getProductview',['product_id'=>$singleProducts->id])}}">View</a></td>
     
    </tr>
@endforeach   
    </tbody>
</table>

</div>
   
<hr>
    <div class="col-md-12" style="padding-left:45%; padding-top:50px;">
    {{$allProducts->links()}}
    
    </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('css/admin_costom.css')}}">
@endsection 