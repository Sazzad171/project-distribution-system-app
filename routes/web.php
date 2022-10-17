<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterMyProjectController;
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

// dashboard
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// register my project
Route::get('/register-my-project', [RegisterMyProjectController::class, 'index'])->name('registerMyProject');

Route::get('/my-profile', function () {
    return view('myProfile');
})->name('myProfile');

Route::get('/settings', function () {
    return view('settings');
})->name('settings');

Route::get('/logout', function () {
    return view('settings');
})->name('logout');