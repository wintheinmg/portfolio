<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserController;

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function(){
    Route::get('/home', function () {
        return view('admin.home');
    })->name('home');
    Route::resource('user', UserController::class);
    Route::get('/user/search/users', [UserController::class, 'searchUser'])->name('user.search');
    Route::get('users-export', [UserController::class, 'exportExcel'])->name('user.export');
    Route::resource('role', RoleController::class);
    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
});
