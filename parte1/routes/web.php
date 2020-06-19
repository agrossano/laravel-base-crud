<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Cagnolini_Controller@index')->name('home');
Route::get('/cagnolino/{id}', 'Cagnolini_Controller@show')->name('toCane');


