<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('dashboard', [App\Http\Controllers\CustomLoginController::class, 'dashboard']);
Route::any('/cus-login', [App\Http\Controllers\CustomLoginController::class, 'cus_login'])->name('cus_login');
Route::any('/login-new-form', [App\Http\Controllers\CustomLoginController::class, 'loginIndex'])->name('login.form');
Route::any('/registration-form', [App\Http\Controllers\CustomLoginController::class, 'registrationIndex'])->name('register.form');
