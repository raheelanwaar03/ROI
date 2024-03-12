<?php

use App\Http\Controllers\user\KYCController;
use App\Http\Controllers\user\UserDashboardController;
use App\Http\Controllers\user\UserDepositController;
use Illuminate\Support\Facades\Route;


Route::name('User.')->prefix('User')->middleware('user', 'auth', 'verified')->group(function () {

    Route::get('/Dashboard', [UserDashboardController::class, 'dashboard'])->name('Dashboard');
    Route::post('/Upload/Profile/Picture', [UserDashboardController::class, 'profile_pic'])->name('Profile.Pic');
    Route::post('/KYC', [KYCController::class, 'kyc'])->name('KYC');
    Route::get('/Deposit/Request', [UserDepositController::class, 'request'])->name('Deposit.Request');
});
