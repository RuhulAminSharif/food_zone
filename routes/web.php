<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use Illuminate\Support\Facades\Route;

Route::inertia('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__ . '/settings.php';

Route::get(
    "admin/dashboard",
    [AdminDashboardController::class, 'index']
)->middleware("auth", "role:admin")->name("admin.dashboard");
