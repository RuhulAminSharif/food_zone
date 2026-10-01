<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    // route path: /admin/dashboard
    // route name: admin.dashboard
    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

});
