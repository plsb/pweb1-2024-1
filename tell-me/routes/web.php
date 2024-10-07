<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sign-up', [AuthController::class, 'showRegisterForm']);

Route::post('/register', [AuthController::class, 'register'])->name('register');
