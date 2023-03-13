<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
Auth::routes();

Route::post('register/user', [RegisterController::class, 'create'])->name('register.user');
Route::post('login', [LoginController::class, 'checkUser'])->name('login');

Route::get('/', function () {
    return view('index');
});


Route::group(['prefix' => 'admin', 'as' => 'admin', 'middleware' => 'auth'], function(){
    Route::get('/logout/user', [LogoutController::class, 'logout'])->name('logout.user');
    Route::get('/', [HomeController::class, 'index'])->name('home');
});


