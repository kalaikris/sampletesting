<?php

use App\Http\Controllers\ParentApp\ParentAppController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::post('/register', [TeacherAuthContoller::class,'register']);
Route::post('/login', [ParentAppController::class,'login']);

Route::post('/send-otp', [ParentAppController::class,'sendOtp']);
Route::post('/verify-otp', [ParentAppController::class,'verifyOtp']);
Route::post('/reset-password', [ParentAppController::class,'resetPassword']);

Route::group(['middleware' =>['auth:parent'] ], function(){
    Route::get('/detail',[ParentAppController::class, 'detail']);
    Route::post('/logout', [ParentAppController::class,'logout']);

});   