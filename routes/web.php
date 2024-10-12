<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});
Route::post('/login', [ \App\Http\Controllers\LoginController::class, 'login' ])->name('login');
