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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/partner',['uses'=>'PartnerController@manageCategory']);
Route::get('admin/withdrawals','WithdrawController@index');
Route::get('admin/commissions','CommissionsController@index');
Route::get('admin/shared-link','SharedController@index');
Route::post('insert-link','SharedController@store');
Route::get('product/{slug}','ProductsController@index');
Route::get('product/{slug}/{id}','ProductsController@buy');
Route::post('order_unit','OrdersController@store');
Route::get('products/cart','OrdersController@index');