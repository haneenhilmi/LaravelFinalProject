<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','App\Http\Controllers\Front\PublicSiteController@showStores')->name('home');

Auth::routes();
Route::get('dashboard', 'App\Http\Controllers\HomeController@index')->middleware('auth');
Route::get('ShowStore/{id}','App\Http\Controllers\Front\PublicSiteController@showStore')->name('ShowStore');
Route::get('ShowProduct/{id}','App\Http\Controllers\Front\PublicSiteController@ShowProduct')->name('ShowProduct');
Route::post('AddToCart/{id}','App\Http\Controllers\Front\PublicSiteController@AddToCart')->name('AddToCart');
Route::get('SearchProduct','App\Http\Controllers\Front\PublicSiteController@SearchProduct')->name('SearchProduct');
Route::get('PurshasesList','App\Http\Controllers\Back\PurchaseController@index')->name('PurshasesList');
Route::get('Report','App\Http\Controllers\Back\PurchaseController@Report')->name('Report');

Route::resource('stores',App\Http\Controllers\Back\StoreController::class);
Route::resource('products',App\Http\Controllers\Back\ProductController::class);


