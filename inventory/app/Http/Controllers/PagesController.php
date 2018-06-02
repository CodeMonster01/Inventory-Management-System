<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    public function getProduct(){

        return view('product/list');
    }

    public function getProductInfo(){
        $allProducts = Product::orderBy('id','desc')->paginate(1);
        return view('product/info')->with('allProducts',$allProducts);
        // echo "String";
    }

    public function getProductedit($product_id){
        $individualProduct= Product::findorFail($product_id);
        return view('product/edit')->with('individualProduct', $individualProduct);
    }

    // public function getProductDelete($product_id){
    //     Product::findOrFail($product_id)->delete();
    //     Session::flash('productDeletedYes','Product Deleted Successfully!');
    //     return back();
    // } 

    public function getProductDelete($product_id){
        $individualProduct= Product::findOrFail($product_id);
        if($individualProduct->delete()){
            Session::flash('productDeletedYes','Product Deleted Successfully!');
            return back();
        }else{
            return back()->with('message_warning','Sorry, try again!');
        }
    }

    public function getProductview($product_id){
        $individualProduct= Product::findOrFail($product_id);
        return view('product/view')->with('individualProduct', $individualProduct);
    }
}
