<?php

use App\Http\Controllers\admin\AdminDashboardController;
use Illuminate\Support\Facades\Route;


Route::name('Admin.')->prefix('Admin')->middleware('admin', 'auth')->group(function () {

    Route::get('/Dashboard', [AdminDashboardController::class, 'dashboard'])->name('Dashboard');
    Route::get('/All/Users', [AdminDashboardController::class, 'all'])->name('All.Users');
    Route::get('/Today/Users', [AdminDashboardController::class, 'today'])->name('Today.Users');
    Route::get('/Pending/Users', [AdminDashboardController::class, 'pending'])->name('Pending.Users');
    Route::get('/Rejected/Users', [AdminDashboardController::class, 'approved'])->name('Approved.Users');
    Route::get('/Approved/Users', [AdminDashboardController::class, 'rejected'])->name('Rejected.Users');
});
