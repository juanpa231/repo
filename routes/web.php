<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesorderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::group(['prefix' => 'api'],function(){
    Route::put('customer/{custId}', [CustomerController::class,'update']);
    Route::get('salesorder/{custId}', [SalesorderController::class,'getorderByCustId']);
    Route::post('product', [ProductController::class,'getProduct']);Route::resource('posts','ApiControllers\PostsApiController');
});