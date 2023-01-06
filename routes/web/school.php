<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('School.schoolLogin');
});
Route::get('/login', function () {
    return view('School.schoolLogin');
});
Route::get('/onboarding', function () {
    return view('School.onboarding');
});
Route::get('/school_configuration', function () {
    return view('School.school_configuration');
});
Route::get('/class_management', function () {
    return view('School\class_management');
});
Route::get('/student_management', function () {
    return view('School\student_management');
});
Route::get('/teacher_management', function () {
    return view('School.teacher_management');
});
Route::get('/parent_management', function () {
    return view('School.parent_management');
});
Route::get('/admission_management', function () {
    return view('School.admission_management');
});
Route::get('/user_management', function () {
    return view('School.user_management');
});
Route::get('/forgot', function () {
    return view('School.forgot');
});