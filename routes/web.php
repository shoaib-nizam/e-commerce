<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


//main layout route
Route::view('/','index')->name('index');
Route::view('/shop','shop')->name('shop');
Route::view('/product','product-details')->name('product');
Route::view('/cart','cart')->name('cart');
Route::view('/chackout','chackout')->name('chackout');
Route::view('/testimonial','testimonial')->name('testimonial');
Route::view('/contact','contact')->name('contact');

//admin panel route

Route::view('/login','admin-panel/login')->name('login');
Route::view('/register','admin-panel/register')->name('signup');