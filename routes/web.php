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

Route::match(['post','get'],"airports","PublicController@airports")->name('airports');
Route::match(['post','get'],"resume/{jobtype?}","PublicController@resume")->name('resume');


//Birthday reminder routes
Route::get("/birthday/reminder", "BirthdayController@registerForm");
Route::post("/birthday/reminder/register", "BirthdayController@register");

Route::get('testemail', function (){
   return view('mail.generic');
});
