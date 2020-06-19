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

Route::match(['post','get'],"airports","PublicController@airports")->name('birthdays');


<<<<<<< HEAD

Route::get("hobby", function(){
    return view('personal.hobby');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bobby', 'PublicController@welcomeBobby');


Route::get('/helloworld', 'PublicController@helloWorld');

Route::get("/resume", "PublicController@resume");
Route::get("/practice","PublicController@practice");
=======
//Birthday reminder routes
Route::get("/birthday/reminder", "BirthdayController@registerForm");
Route::post("/birthday/reminder/register", "BirthdayController@register");
>>>>>>> 0947c48364760d386f03c954bd861d2ba758a6f4
