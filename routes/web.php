<?php

use Illuminate\Support\Facades\Route;

/*
 *unauthenticated routes
 */
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);


/*
 *authenticated routes
 */
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
