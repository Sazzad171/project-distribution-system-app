<?php

use App\Http\Controllers\AssignedStudentsController;
use App\Http\Controllers\DashboardController;
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

// authenticated user
Route::group(['middleware' => 'auth'], function () {
    // dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // assigned students list
    Route::get('/my-students', [AssignedStudentsController::class, 'index'])->name('myStudents');

    // settings
    Route::get('/settings', function () {
        return view('settings');
    })->name('settings');

    // logout
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
});
