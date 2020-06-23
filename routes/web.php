<?php

use Illuminate\Support\Facades\Route;

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
Route::match(['post','get'],"airports/{country}","PublicController@airports")->name('airports');

//Birthday reminder routes
Route::get("/birthday/reminder", "BirthdayController@reminder");
Route::get("/arrays", "PublicController@arrays");
Route::get("/practice", "PublicController@practice");
Route::post("/birthday/reminder/register", "BirthdayController@register");
