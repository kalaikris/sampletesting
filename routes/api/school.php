<?php
use App\Http\Controllers\School\SchoolAuthContoller;
use App\Http\Controllers\School\SchoolOnboardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::post('/register', [SchoolAuthContoller::class,'register']);
Route::post('/login', [SchoolAuthContoller::class,'login']);
Route::post('/send-otp', [SchoolAuthContoller::class,'sendOtp']);
Route::post('/verify-otp', [SchoolAuthContoller::class,'verifyOtp']);
Route::post('/reset-password', [SchoolAuthContoller::class,'resetPassword']);
Route::group(['middleware' =>['auth:school'] ], function(){
    Route::get('/detail',[SchoolAuthContoller::class, 'detail']);
    Route::post('/logout',[SchoolAuthContoller::class, 'logout']);
    Route::post('/onboard',[SchoolOnboardController::class, 'onboard']);
});