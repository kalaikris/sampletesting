<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Teacher.teacherLogin');
});
Route::get('/login', function () {
    return view('Teacher.teacherLogin');
});
// Route::get('/teacher_pass_recover', function () {
//     return view('Teacher.teacherForgot');
// });

Route::view('/teacher_pass_recover', 'Teacher.teacherForgot');
Route::view('/myclasses', 'Teacher.teacherMyclasses');
//Route::view('/class_details', 'Teacher.teacherClassdetails');
Route::post('/class_details', function () {
    return view('Teacher.teacherClassdetails');
});
