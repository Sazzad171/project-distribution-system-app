<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

// dashboard
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

// student
Route::group(['prefix' => 'student', 'as' => 'student.'], function () {
    Route::get('/', [StudentController::class, 'index'])->name('list');

    Route::get('/create', [StudentController::class, 'create'])->name('create');
    Route::post('/store', [StudentController::class, 'store'])->name('store');

    Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('edit');
    Route::post('/update/{student}', [StudentController::class, 'update'])->name('update');

    Route::get('/delete/{student}', [StudentController::class, 'delete'])->name('delete');
});

// teacher
Route::group(['prefix' => 'teacher', 'as' => 'teacher.'], function () {
    Route::get('/', [TeacherController::class, 'index'])->name('list');

    Route::get('/create', [TeacherController::class, 'create'])->name('create');
    Route::post('/store', [TeacherController::class, 'store'])->name('store');
});