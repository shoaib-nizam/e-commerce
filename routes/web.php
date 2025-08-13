<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\RegisterController;


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

Route::view('/admin','admin-panel/login')->name('login');
Route::view('/signup','admin-panel/register')->name('signup');
Route::view('/dashboard','admin-panel/dashboard')->name('dashboard');


Route::post('/register', [RegisterController::class,'register'])->name('register');
