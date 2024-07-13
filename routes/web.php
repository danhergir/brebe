<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Register User
Route::get('/registro/1-step', [UserController::class, 'register'])->name('user.register');
Route::post('/registro/1/guardar', [UserController::class, 'submitForm1'])->name('user.save-1');

Route::get('/registro/2-step', [UserController::class, 'registerStep2'])->name('user.register-2');
Route::post('/registro/2/guardar', [UserController::class, 'submitForm2'])->name('user.save-2');

Route::get('/registro/3-step', [UserController::class, 'registerStep3'])->name('user.register-3');
Route::post('/registro/3/guardar', [UserController::class, 'submitForm3'])->name('user.save-3');

Route::get('/registro/4-step', [UserController::class, 'registerStep4'])->name('user.register-4');
Route::post('/registro/4/guardar', [UserController::class, 'submitForm4'])->name('user.save-4');

Route::get('/registro/5-step', [UserController::class, 'registerStep5'])->name('user.register-5');
Route::post('/registro/5/guardar', [UserController::class, 'submitForm5'])->name('user.save-5');

Route::get('/send/validation/{email}', [UserController::class, 'sendValidation'])->name('send.validation');
