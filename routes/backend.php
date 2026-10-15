<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend as BackendControllers;

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/dashboard', [BackendControllers\Dashboards\DashboardController::class, 'index'])->name('dashboard');

    Route::resource('roles', BackendControllers\Roles\RoleController::class);
});
