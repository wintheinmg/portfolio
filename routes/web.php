<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    return redirect()->route('home');
});

Route::get('/home',[HomeController::class, 'index'])->name('home');

Auth::routes();

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function(){
    Route::get('/home', function () {
        return view('admin.home');
    })->name('home');

    Route::resource('/about', AboutController::class);
    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
});

