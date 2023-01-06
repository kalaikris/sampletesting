<?php

use Illuminate\Support\Facades\Route;
use resources\views;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/pass_recover', function () {
    return view('SuperAdmin.superAdminForgotPass');
});
Route::get('/superadmin_home', function () {
    return view('SuperAdmin.schoolOnboard');
});