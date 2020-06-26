<?php
Route::get('testemail', function (){
    return view('mail.generic');
});

Route::get("/birthday/reminder", "BirthdayController@registerForm");
Route::post("/birthday/reminder/register", "BirthdayController@register");
