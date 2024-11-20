<?php
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


# Backend Routing #
// Register Routing
Route::get('register', [RegisterController::class, 'FormRegistration'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
// Login Routing
Route::get('login', [LoginController::class, 'LoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
