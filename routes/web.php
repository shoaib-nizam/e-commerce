<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::view('/','index')->name('index');
Route::view('/shop','shop')->name('shop');
