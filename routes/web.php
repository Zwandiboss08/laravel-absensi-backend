<?php

use App\Http\Controllers\AttendanceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('pages.auth.auth-login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        return view('pages.dashboard',['type_menu' => 'home']);
    })->name('home');

    Route::resource('users', UserController::class);
    Route::resource('companies', \App\Http\Controllers\CompanyController::class);
    Route::resource('attendances', AttendanceController::class);
    Route::resource('permissions', \App\Http\Controllers\PermissionController::class);
});
