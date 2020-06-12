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



Route::get("hobby", function(){
    return view('personal.hobby');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/helloworld', 'PublicController@helloWorld');

Route::get("/aboutus", function (){
   return "This page is about us";
});
