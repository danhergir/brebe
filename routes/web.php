<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Register User
Route::get('/registro/1-step', [UserController::class, 'register'])->name('user.register');
Route::get('/registro/2-step', [UserController::class, 'registerStep2'])->name('user.register-2');
