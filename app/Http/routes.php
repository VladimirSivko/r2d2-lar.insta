<?php

use App\Picture;

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/pictures', 'PictureController@index');

Route::post('admin/picture', 'PictureController@store');

Route::delete('/picture/{picture}', 'PictureController@destroy');
