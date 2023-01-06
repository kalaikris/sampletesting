<?php

use App\Http\Controllers\TeacherApp\TeacherAppController;
use App\Http\Controllers\TeacherApp\TeacherAppClassController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::post('/register', [TeacherAuthContoller::class,'register']);
Route::post('/login', [TeacherAppController::class,'login']);

Route::post('/send-otp', [TeacherAppController::class,'sendOtp']);
Route::post('/verify-otp', [TeacherAppController::class,'verifyOtp']);
Route::post('/reset-password', [TeacherAppController::class,'resetPassword']);

Route::group(['middleware' =>['auth:teacher'] ], function(){
    Route::get('/detail',[TeacherAppController::class, 'detail']);
    Route::post('/logout', [TeacherAppController::class,'logout']);

    Route::get('/classes', [TeacherAppClassController::class,'teacherClasses']);
    Route::get('/students/{class_token}', [TeacherAppClassController::class,'classDetails']);
    Route::get('/student/{student_token}', [TeacherAppClassController::class,'studentDetails']);
});   