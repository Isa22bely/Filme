<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('inicio');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', function () {
    return view('index');
});

Route::get('/filme', [App/Controllers\AutoresController::class, 'create'])->name('novoFilme');