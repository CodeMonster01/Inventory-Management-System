<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//product control part
Route::get('/product','PagesController@getProduct')->name('getProduct');
Route::post('/product/data','PostController@postProduct')->name('postProduct');
Route::get('/product/info','PagesController@getProductInfo')->name('getProductInfo');
Route::get('/product/edit/view/{product_id}','PagesController@getProductedit')->name('getProductedit');
Route::get('/product/view/{product_id}','PagesController@getProductview')->name('getProductview');
Route::post('/product/edit/post','PostController@postEditProduct')->name('postEditProduct');
Route::get('/product/delete/{product_id}','PagesController@getProductDelete')->name('getProductDelete');

// user/customer control part
Route::get('admin/user','CustomerController@getUser')->name('getUser');


// setting control part
Route::get('/setting/insert','SettingController@getSetting')->name('getSetting');
Route::post('/setting/change','SettingController@postSetting')->name('postSetting');


Route::get('/setting/view','SettingController@viewSetting')->name('viewSetting');
