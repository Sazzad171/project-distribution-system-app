<?php

use App\Http\Controllers\AssignedStudentsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\StudentContactController;
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

    // any student details
    Route::get('/student-details/{std_id}', [AssignedStudentsController::class, 'details'])->name('studentDetails');

    // update student details
    Route::post('/update-student-info/{proj_id}', [AssignedStudentsController::class, 'updateStudentInfo'])->name('updateStudentInfo');

    // show message page
    Route::get('/student-contact/{std_id}', [StudentContactController::class, 'index'])->name('studentContact');

    // store teacher message
    Route::post('/update-message', [StudentContactController::class, 'storeMessage'])->name('storeMessage');

    // view settings form
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');

    // update settings info
    Route::post('/update-settings', [SettingsController::class, 'update'])->name('updateSettings');

    // logout
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
});
