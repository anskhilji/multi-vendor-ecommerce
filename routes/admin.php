<?php
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\profileController;
use App\Http\Controllers\Backend\SliderController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', [AdminController::class, 'dashboard'])
    ->name('dashboard');


/** Profile Routes */
Route::get('profile', [profileController::class, 'index'])->name('profile');
Route::post('profile/update', [profileController::class, 'updateProfile'])->name('profile.update');
Route::post('profile/update/password', [profileController::class, 'updatePassword'])->name('password.update');

/** Slider Routes */
Route::resource('slider', SliderController::class);
