<?php
Route::get('sports', function (){
    return view('mail.sportscard');
});
Route::get("/cars" ,"CarsController@cars");
Route::match(['post','get'],"airports/{country}","PublicController@airports")->name('airports');
