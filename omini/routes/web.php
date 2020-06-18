<?php

use Illuminate\Support\Facades\Route;



Route::get('/', "OminiController@index") -> name('home');
