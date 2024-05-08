<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::prefix('admin')->name('admin.')->group(function(){
    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
        Route::View('/login','back.pages.admin.auth.login')->name('login');
        Route::POST('/login_handler',[AdminController::class,'loginHandler'])->name('login_handler');
        Route::View('/forgot-password','back.pages.admin.auth.forgot-password')->name('forgot_password');
        Route::POST('/send-password-reset-link',[AdminController::class,'sendPasswordResetLink'])->name
        ('send-password-reset-link',);
        Route::GET('/password/reset/{token}',[AdminController::class, 'resetPassword'])->name('reset-password');
    });
    Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
        Route::View('/home','back.pages.admin.home')->name('home');
        Route::POST('/logout_handler', [AdminController::class,'logoutHandler'])->name('logout_handler');
    });
    Route::middleware(['guest:admin'])->group(function(){
        Route::View('/registerhome', 'back.pages.admin.auth.register')->name('register');
        
    });
});