<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use Carbon\Carbon; 
use Image;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    //get setting info
    public function getSetting(){
        return view('setting.getSetting');
    }
//post setting info
    public function postSetting(Request $request){
        
       
    //   echo $request->pic_title;
    //   echo $request->button_link;
    //   echo $request->product_picture;


        $insertedSettingId=Setting::insertGetId([
            "pic_title"=>$request->pic_title,
            "button_link"=>$request->button_link,
            "created_at"=> Carbon::now('Asia/Dhaka'),
            
        ]);

        if($request->hasFile('product_picture')){
            $insertIntoDB = Setting::findorfail($insertedSettingId);
            $product_picture = $request->file('product_picture');
        
            $filename = $insertedSettingId . '.' . $product_picture->getClientOriginalExtension();
            Image::make($product_picture)->resize(150, 195)->save( base_path('public/uploads/' . $filename ),40 );
            $insertIntoDB->product_pic = $filename;
            $insertIntoDB->save();
        }
        return back();
    
}
    public function viewSetting(){
        $individualSetting= Setting::all();
        return view('setting/viewSetting')->with('individualSetting', $individualSetting);
    }
    
    
}   


