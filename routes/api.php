<?php

use App\Http\Controllers\userDetailsController;
use App\Http\Controllers\deviceDetailsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/user/search',[userDetailsController::class,'Search']);
Route::get('/count/show',[userDetailsController::class,'GettotalCount']);
Route::post('/device/logs/search',[userDetailsController::class,'DeviceLogSearch']);
Route::get('/show/device/details/{emailId}',[userDetailsController::class,'showDeviceDetail']);
Route::get('/device/details/byHid/{hid}',[deviceDetailsController::class,'showDeviceDetailByHid']);
Route::put('/device/status/check/byHid',[deviceDetailsController::class,'DeviceStatusCheck']);
Route::put('/user/status/check/byEmail',[userDetailsController::class,'userStatusCheck']);
Route::post('/device/debug/check/byHid',[deviceDetailsController::class,'DeviceDebug']);

