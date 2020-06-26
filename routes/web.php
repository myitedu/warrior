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

<<<<<<< HEAD
//Birthday reminder routes
Route::get("/arrays", "PublicController@arrays");
Route::get("/practice", "PublicController@practice");
=======
Route::match(['post','get'],"airports","PublicController@airports")->name('birthday');

>>>>>>> c541f6a3b7a38764fd1e64c3414b3e9289fbbd5c
//Birthday reminder routes
Route::get("/birthday/reminder", "BirthdayController@registerForm");
Route::post("/birthday/reminder/register", "BirthdayController@register");
Route::get("/cars" ,"CarsController@cars");
Route::get('testemail', function (){
   return view('mail.generic');
});
<<<<<<< HEAD

Route::get('islamic', function (){
    return view('mail.islamicscard');
=======
Route::get('sports', function (){
    return view('mail.sportscard');
>>>>>>> c541f6a3b7a38764fd1e64c3414b3e9289fbbd5c
});
