<?php
use App\Http\Controllers\CountryStateCityController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::get('/countries', [CountryStateCityController::class,'countries']);
Route::get('/states/{country_id}', [CountryStateCityController::class,'states']);
Route::get('/cities/{state_id}', [CountryStateCityController::class,'cities']);