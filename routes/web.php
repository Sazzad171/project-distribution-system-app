<?php

use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MyProjectController;
use App\Http\Controllers\RegisterMyProjectController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SupervisorContactController;
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

// show archive page
Route::get('/archives', [ArchiveController::class, 'index'])->name('archives')->middleware('guest');

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

    // my project
    Route::get('/my-project', [MyProjectController::class, 'index'])->name('myProject');

    // update student info
    Route::post('/update-student-info', [MyProjectController::class, 'update'])->name('updateInfo');

    // supervisor contact
    Route::get('/supervisor-contact', [SupervisorContactController::class, 'index'])->name('supervisorContact');

    // message store
    Route::post('/store-message', [SupervisorContactController::class, 'storeMessage'])->name('storeMessage');

    // store message file
    Route::post('/update-message-file', [SupervisorContactController::class, 'storeFile'])->name('storeFile');

    // view settings form
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');

    // update settings info
    Route::post('/update-settings', [SettingsController::class, 'update'])->name('updateSettings');

    // logout
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
});