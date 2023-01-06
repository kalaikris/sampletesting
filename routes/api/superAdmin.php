<?php
use App\Http\Controllers\SuperAdmin\SuperAdminAuthContoller;
use App\Http\Controllers\SuperAdmin\SuperAdminSchoolController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/register', [SuperAdminAuthContoller::class,'register']);
Route::post('/login', [SuperAdminAuthContoller::class,'login']);

Route::post('/send-otp', [SuperAdminAuthContoller::class,'sendOtp']);
Route::post('/verify-otp', [SuperAdminAuthContoller::class,'verifyOtp']);
Route::post('/reset-password', [SuperAdminAuthContoller::class,'resetPassword']);


Route::group(['middleware' =>['auth:admin'] ], function(){
    Route::get('/detail',[SuperAdminAuthContoller::class, 'detail']);
    Route::post('/logout',[SuperAdminAuthContoller::class, 'logout']);
    Route::post('/logout-all',[SuperAdminAuthContoller::class, 'logoutAll']);

    Route::post('/invite-school',[SuperAdminSchoolController::class, 'store']);
    Route::get('/invited-schools',[SuperAdminSchoolController::class, 'invitedSchools']);
    Route::get('/onboarded-schools',[SuperAdminSchoolController::class, 'onboardedSchools']);
    Route::post('/mail',[SuperAdminSchoolController::class, 'mail']);
});