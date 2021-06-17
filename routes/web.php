<?php

use App\Http\Controllers\userDetailsController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/{any}', function () {
    return view('vue');
})->where('any', '.*');


//Route::post('/user/search',[userDetailsController::class,'Search']);
//Route::get('/count/show',[userDetailsController::class,'GettotalCount']);
//Route::post('/device/logs/search',[userDetailsController::class,'DeviceLogSearch']);
//Route::get('/show/device/details/{emailId}',[userDetailsController::class,'showDeviceDetail']);
