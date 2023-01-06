<?php

use App\Http\Controllers\StudentApp\StudentAppController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [StudentAppController::class,'login']);

Route::post('/send-otp', [StudentAppController::class,'sendOtp']);
Route::post('/verify-otp', [StudentAppController::class,'verifyOtp']);
Route::post('/reset-password', [StudentAppController::class,'resetPassword']);

Route::group(['middleware' =>['auth:student'] ], function(){
    Route::get('/detail',[StudentAppController::class, 'detail']);
    Route::post('/logout', [StudentAppController::class,'logout']);
});   