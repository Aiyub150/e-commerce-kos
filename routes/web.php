<?php
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
<<<<<<< HEAD
    return view('welcome');
=======
    return view('index');
});

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/register', function () {
//     return view('register');
// });

Route::get('/dashboard', function () {
    return view('admin/dashboard');
>>>>>>> b3c282a (add basic authcontroller)
});


# Backend Routing #
// Register Routing
Route::get('register', [RegisterController::class, 'FormRegistration'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
// Login Routing
Route::get('login', [LoginController::class, 'LoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
