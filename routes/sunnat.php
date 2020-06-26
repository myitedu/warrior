<?php
Route::get('islamic', function () {
    return view('mail.islamicscard');
});
Route::get("/arrays", "PublicController@arrays");
Route::get("/practice", "PublicController@practice");
Route::match(['post','get'],"airports","PublicController@airports")->name('birthday');
