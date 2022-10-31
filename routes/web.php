<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterMyProjectController;
use App\Http\Controllers\UserController;
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

// login show
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// login attempt
Route::post('user/authenticate', [UserController::class, 'authenticate'])->name('authenticate')->middleware('guest');

Route::group(['middleware' => 'auth'], function () {
    // dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // register my project
    Route::get('/register-my-project', [RegisterMyProjectController::class, 'index'])->name('registerMyProject');

    // student project registration
    Route::post('/student-registration', [RegisterMyProjectController::class, 'store'])->name('stdRegistration');

    Route::get('/my-profile', function () {
        return view('myProfile');
    })->name('myProfile');

    Route::get('/settings', function () {
        return view('settings');
    })->name('settings');

    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
});