<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\RegisterController;


Route::prefix('admin')->group(function () {
    Route::get('register', [RegisterController::class, 'create'])->name('admin.register.create');
    Route::post('register', [RegisterController::class, 'store'])->name('admin.register.store');

    Route::get('login', [LoginController::class, 'create'])->name('admin.login.create');
    Route::post('login', [LoginController::class, 'store'])->name('admin.login.store');
});
