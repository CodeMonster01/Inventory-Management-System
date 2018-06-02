<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Charts;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $chart = Charts::database(Product::all(), 'pie', 'fusioncharts')
    ->elementLabel("Total")
    ->dimensions(1000, 500)
    ->responsive(false)
    ->groupBy('product_price');
    return view('home', ['chart' => $chart]);
        
    }
}
