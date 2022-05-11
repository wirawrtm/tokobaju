<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ViewController;


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

Route::get('singleproduct', function () {
    return view('single-product');
});

Route::controller(ProductController::class)->group(function(){
    route::post('storeproduct','store')->middleware('auth');
    route::get('adm','index')->middleware('auth')->name('adm');
    route::get('proses','proses')->middleware('auth')->name('proses');
    route::get('belanjaan','belanjaan')->middleware('auth')->name('belanjaan');
    route::get('showproduct/{id}','show')->middleware('auth')->name('showproduct');
    route::post('updateproduct/{id}','update')->middleware('auth');
    route::get('kirim/{id}/{ids}','kirim')->middleware('auth')->name('kirim');
    route::get('destroyproduct/{id}','destroy')->middleware('auth');
    route::get('editprofile','editprofile')->middleware('auth');
    route::get('addproduct','addproduct')->middleware('auth')->name('addproduct');


});

Route::controller(UserController::class)->group(function(){
    route::post('storeuser','store');
    route::get('showuser/{id}','show')->name('showuser');
    Route::post('proseslog', 'login');
    route::get('logout','logout')->name('logout');
});

Route::controller(ViewController::class)->group(function(){
    route::get('/','index')->name('index');
    route::get('single/{id}','single')->name('single');
    route::post('addkeranjang','store')->name('addkeranjang');
    route::get('addtocart','show')->middleware('auth')->name('addtocart');
    route::get('destroyaddtocart/{id}','destroy')->name('destroyaddtocart');
    route::get('editsingleproduk/{id}','editsingle')->name('editsingleproduk');
    route::post('updatekeranjang/{id}','update')->name('updatekeranjang');
    route::get('checkout/{idbuyer}','checkout')->name('checkout');
});


Route::get('login', function () {
    return view('admin.login');
})->name('login');

Route::get('adduser', function () {
    return view('admin.adduser');
});

Route::get('main', function () {
    return view('layouts.mainadmin');
});
