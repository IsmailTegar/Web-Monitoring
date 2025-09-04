<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/failed', function () {
    return view('failed');
});

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.post');
Route::get('/hostpot', [UserController::class, 'index'])->name('users.index');

Route::get('/notification', function() {
    return view('notification');
});
Route::get('/notification', function() {
    return view('notification');
});


