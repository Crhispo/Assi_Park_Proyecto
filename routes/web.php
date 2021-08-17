<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
Route::get('/', function () {
    return view('home');
});

Route::get('/login',[SessionsController::class,'create'])->name('login.index');

Route::post('/login',[SessionsController::class,'store'])->name('login.store');

Route::post('/logout',[SessionsController::class,'destroy'])->name('login.destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
