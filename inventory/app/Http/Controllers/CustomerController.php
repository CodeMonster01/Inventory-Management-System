<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class CustomerController extends Controller
{
    public function getUser(){
        $user= User::all();
        return view('admin/customers',compact('user'));
    }
}
