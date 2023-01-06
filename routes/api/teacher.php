<?php
use App\Http\Controllers\Teacher\TeacherAuthContoller;
use App\Http\Controllers\Teacher\TeacherClassController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/register', [TeacherAuthContoller::class,'register']);
Route::post('/login', [TeacherAuthContoller::class,'login']);

Route::post('/send-otp', [TeacherAuthContoller::class,'sendOtp']);
Route::post('/verify-otp', [TeacherAuthContoller::class,'verifyOtp']);
Route::post('/reset-password', [TeacherAuthContoller::class,'resetPassword']);

Route::group(['middleware' =>['auth:teacher'] ], function(){
    Route::get('/detail',[TeacherAuthContoller::class, 'detail']);
    Route::post('/logout', [TeacherAuthContoller::class,'logout']);

    Route::get('/classes', [TeacherClassController::class,'teacherClasses']);
    Route::get('/class/{class_token}', [TeacherClassController::class,'classDetails']);
});    