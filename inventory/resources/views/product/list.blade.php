@extends('adminlte::page')

@section('content')

<div class="container">
    <div class="col-md-12 box box-info">
        <div class="box-header with-border">
            <h1 class="box-title">Enter Product Information</h1>
            <hr>
        </div>    
            
            <form class="form-horizontal" action="{{url('product/data')}}" method="post">
            @csrf
                <div class="box-body">
                    <div class="form-group">
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="Product Name" name="product_name"  value="{{ old('product_name') }}">
                        </div>
                    </div>    
                </div>
                @if ($errors->has('product_name'))
                    <span style="color:red">
                        <strong>{{ $errors->first('product_name') }}</strong>
                    </span>
                @endif
                
            
                <div class="box-body">
                    <div class="form-group">
                        <div class="col-md-10">
                    <textarea class="form-control" rows="3" name="product_description" placeholder="Product Description"  value="{{ old('product_description') }}"></textarea>
                        </div>
                    </div>
                </div>         
                @if ($errors->has('product_description'))
                    <span style="color:red">
                        <strong>{{ $errors->first('product_description') }}</strong>
                    </span>
                @endif

                <div class="box-body">
                    <div class="form-group">
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="Product Category" name="product_category"  value="{{ old('product_category') }}">
                        </div>
                    </div>
                </div>        
                @if ($errors->has('product_category'))
                    <span style="color:red">
                        <strong>{{ $errors->first('product_category') }}</strong>
                    </span>
                @endif
                
                
                <div class="box-body">
                    <div class="form-group">
                        <div class="col-md-10">
                            <input type="number" class="form-control" placeholder="Product Price" name="product_price"  value="{{ old('product_price') }}">
                        </div>
                    </div>
                </div>        
                @if ($errors->has('product_price'))
                    <span style="color:red">
                        <strong>{{ $errors->first('product_price') }}</strong>
                    </span>
                @endif

                
                <div class="box-body">
                    <div class="form-group">
                        <div class="col-md-10">
                            <input type="number" class="form-control" placeholder="Product Stock" name="product_stock"  value="{{ old('product_stock') }}">
                        </div>
                    </div>
                </div>        
                @if ($errors->has('product_stock'))
                    <span style="color:red">
                        <strong>{{ $errors->first('product_stock') }}</strong>
                    </span>
                @endif

            
                <div class="box-body">
                    <div class="form-group">
                        <div class="col-md-10">
                            <input type="number" class="form-control" placeholder="Product Quantity" name="product_quantity" value="{{ old('product_quantity') }}">
                        </div>
                    </div>
                </div>        
                @if ($errors->has('product_quantity'))
                    <span style="color:red">
                        <strong>{{ $errors->first('product_quantity') }}</strong>
                    </span>
                @endif



                <div class="box-body">
                    <div class="form-group">    
                        <div class="col-md-10">
                            <button type="submit" class="btn btn-info pull-left">Submit</button>
                            <a class="btn btn-default pull-right" href="{{route('getProductInfo')}}">View Products</a> 
                        </div>  
                    </div>
                </div>

            </form> 
    </div>
</div>
   
@endsection