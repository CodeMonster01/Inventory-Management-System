@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="col-md-12 box box-info">
        <div class="box-header with-border">
            <h1 class="box-title">Enter Product Information</h1>
            <hr>
        </div> 

        <form class="form-horizontal" action="{{route('postSetting')}}" method="post" enctype="multipart/form-data">
        @csrf
                <div class="box-body">
                    <div class="form-group">
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="Product Title" name="pic_title"  value="{{ old('pic_title') }}">
                        </div>
                    </div>    
                </div>

                 @if ($errors->has('banner_title'))
                    <span style="color:red">
                        <strong>{{ $errors->first('banner_title') }}</strong>
                    </span>
                @endif
                
                <div class="box-body">
                    <div class="form-group">
                        <div class="col-md-10">
                    <input type="file" id="fileInput" class="form-control" name="product_picture" placeholder="Product pic"></input>
                        </div>
                    </div>
                </div>         
                @if ($errors->has('product_pic'))
                    <span style="color:red">
                        <strong>{{ $errors->first('product_pic') }}</strong>
                    </span>
                @endif

                <div class="box-body">
                    <div class="form-group">
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="Button Link" name="button_link"  value="{{ old('button_link') }}">
                        </div>
                    </div>    
                </div>

                 @if ($errors->has('button_link'))
                    <span style="color:red">
                        <strong>{{ $errors->first('button_link') }}</strong>
                    </span>
                @endif

                
                <div class="box-body">
                    <div class="form-group">    
                        <div class="col-md-10">
                            <button type="submit" class="btn btn-info pull-left">Submit</button>
                            <a class="btn btn-default pull-right" href="{{route('viewSetting')}}">View Setting</a> 
                        </div>  
                    </div>
                </div>
        </form>        

     </div>
</div>        


@endsection