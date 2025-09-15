<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FirewallController;
use App\Http\Controllers\PPPoEController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/failed', function () {
    return view('failed');
});
Route::get('/notification', function() {
    return view('notification');
});

//LOGIN
Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.post');

//DASHBOARD
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

//DASHBOARD REALTIME
Route::get('dashboard/cpu', [DashboardController::class, 'cpu'])->name('dashboard.cpu');
Route::get('dashboard/uptime', [DashboardController::class, 'uptime'])->name('dashboard.uptime');
Route::get('dashboard/{traffic}', [DashboardController::class, 'traffic'])->name('dashboard.traffic');


Route::get('pppoe/secret', [PPPoEController::class, 'index'])->name('pppoe.secret');

// Hotspot
Route::get('/hotspot', [UserController::class, 'index'])->name('hotspot.hotspot');
Route::get('hotspot/hotspot/active', [UserController::class, 'active'])->name('hotspot.active');
Route::post('hotspot/hotspot/add', [UserController::class, 'add'])->name('hotspot.add');
Route::get('hotspot/hotspot/edit/{id}', [UserController::class, 'edit'])->name('hotspot.edit');
Route::post('hotspot/hotspot/update', [UserController::class, 'update'])->name('hotspot.update');
Route::get('hotspot/hotspot/delete/{id}', [UserController::class, 'delete'])->name('hotspot.delete');

// Firewall
Route::get('/blockedip', [FirewallController::class, 'index'])->name('blockedip.blockedip');

//TRAFFIC
Route::get('report-traffic', [ReportController::class, 'index'])->name('traffic.index');
Route::get('up', [ReportController::class, 'up'])->name('up');
Route::get('down', [ReportController::class, 'down'])->name('down');








