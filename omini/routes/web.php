<?php

use Illuminate\Support\Facades\Route;



Route::get('/', "OminiController@index") -> name('home');
Route::get('/omino/{id}', 'OminiController@show') -> name('show');
Route::get('/omino/delete/{id}', 'OminiController@destroy') -> name('destroy');
Route::get('/edit/{id}', 'OminiController@edit') -> name('edit');
Route::post('/update/{id}', 'OminiController@update') -> name('update');