@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1 style="text-center">Product info in detail</h1>
        </div>
    </div>

        <div class="col-md-12">
            <table class="table">
            <th>Product Name</th>
            <th>Product Description</th>
            <th>Product category</th>
            <th>Product Price</th>
            <th>Product Stock</th>
            <th>Product Quantity</th>
           

            <tr>
                <td>{{$individualProduct->product_name}}</td>
                <td>{{$individualProduct->product_description}}</td>
                <td>{{$individualProduct->product_category}}</td>
                <td>{{$individualProduct->product_price}}</td>
                <td>{{$individualProduct->product_stock}}</td>
                <td>{{$individualProduct->product_quantity}}</td>
            </tr>
            </table>
        </div>

        <div class="col-md-12">
        <a class="btn btn-lg btn-primary" href="{{route('getProductedit',['product_id'=>$individualProduct->id])}}">EDIT</a>
        <a class="btn btn-lg btn-danger" href="{{route('getProductDelete',['product_id'=>$individualProduct->id])}}">DELETE</a>
        </div>

        

</div>

@endsection