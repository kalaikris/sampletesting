<?php

use Illuminate\Support\Facades\Route;
use resources\views;
use resources\views\SuperAdmin;
use Illuminate\Support\Facades\public;

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

Route::get('/', function () {
    return view('School.forgot');
});

Route::get('/super-admin', function () {
    return view('SuperAdmin.schoolOnboard');
});

Route::get('/fuck', function () {
    return view('Illuminate.Support.Facades.public.teacher_management');
});