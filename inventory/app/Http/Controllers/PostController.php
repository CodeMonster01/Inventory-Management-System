<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Carbon\Carbon;
use Session;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    public function postProduct(Request $insertReq){
        // print_r($_POST);
        // return view('product/info');


        $insertReq->validate([
            "product_name"=>"required",
            "product_description"=>"required",
            "product_category"=>"required",
            "product_price"=>"required",
            "product_stock"=>"required|numeric",
            "product_quantity"=>"required|numeric",


        ]);
        Product::insert([
          "product_name"=> $insertReq->product_name,
          "product_description"=>$insertReq->product_description,
          "product_category"=> $insertReq->product_category,
          "product_price"=> $insertReq->product_price,
          "product_stock"=> $insertReq->product_stock,
          "product_quantity"=> $insertReq->product_quantity,
          "created_at"=>Carbon::now('Asia/Dhaka'),  
          "updated_at"=>Carbon::now('Asia/Dhaka'),  
        ]);

        return back();
    }

    public function postEditProduct(Request $editReq){
        // print_r($_POST);
        // return view('product/postEdit');
        // $editReq->id -> for update
       

        $editReq->validate([
            "product_name"=>"required",
            "product_description"=>"required",
            "product_category"=>"required",
            "product_price"=>"required|numeric",
            "product_stock"=>"required|numeric",
            "product_quantity"=>"required|numeric",
        
        ]);
        Product::findOrFail($editReq->id)->update([
            'product_name'=> $editReq->product_name,
            'product_description'=>$editReq->product_description,
            'product_category'=>$editReq->product_category,
            'product_price'=> $editReq->product_price,
            'product_stock'=> $editReq->product_stock,
            'product_quantity'=> $editReq->product_quantity,
        ]);   
        Session::flash('productUpdatedYes','Product Updated Successfully!');
        return back();
    }


}


