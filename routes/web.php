<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
})->name('login');


Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('forgot-password');

Route::get('/user-dashboard', function(){
    return view('pages.users.dashboard');
})->name('dashboard');

Route::get('/user-services', function(){
    return view('pages.users.services');
})->name('services');

Route::get('/user-history', function(){
    return view('pages.users.history');
})->name('history');