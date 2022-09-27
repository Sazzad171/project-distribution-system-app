<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


// dashboard
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

// student
Route::group(['prefix' => 'student', 'as' => 'student.'], function () {
    Route::get('/', [StudentController::class, 'index'])->name('list');
    
});