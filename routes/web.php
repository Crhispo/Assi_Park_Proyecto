<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionsController;


Route::get('/', function () {
    return view('home');
});

//ruta de la vista administrador
Route::get('/admin', [
    HomeController::class, 'admin'
])->name('admin');

//ruta de la vista residente
Route::get('/residente', [
    HomeController::class, 'residente'
])->name('residente');

//ruta de la vista guarda
Route::get('/guarda', [
    HomeController::class, 'guarda'
])->name('guarda');

Route::get('/login', [SessionsController::class, 'create'])->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])->name('login.store');

Route::post('/logout', [SessionsController::class, 'destroy'])->name('login.destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
