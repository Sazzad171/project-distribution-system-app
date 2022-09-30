<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\FieldController;

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

    Route::get('/edit/{id}', [TeacherController::class, 'edit'])->name('edit');
    Route::post('/update/{teacher}', [TeacherController::class, 'update'])->name('update');

    Route::get('/delete/{teacher}', [TeacherController::class, 'delete'])->name('delete');
});

// semester
Route::group(['prefix' => 'semester', 'as' => 'semester.'], function () {
    Route::get('/', [SemesterController::class, 'index'])->name('list');

    Route::get('/create', [SemesterController::class, 'create'])->name('create');
    Route::post('/store', [SemesterController::class, 'store'])->name('store');

    Route::get('/edit/{id}', [SemesterController::class, 'edit'])->name('edit');
    Route::post('/update/{semester}', [SemesterController::class, 'update'])->name('update');

    Route::get('/delete/{semester}', [SemesterController::class, 'delete'])->name('delete');
});

// field-area
Route::group(['prefix' => 'field', 'as' => 'field.'], function () {
    Route::get('/', [FieldController::class, 'index'])->name('list');

    Route::get('/create', [FieldController::class, 'create'])->name('create');
    Route::post('/store', [FieldController::class, 'store'])->name('store');

    Route::get('/edit/{id}', [FieldController::class, 'edit'])->name('edit');
    Route::post('/update/{field}', [FieldController::class, 'update'])->name('update');

    Route::get('/delete/{field}', [FieldController::class, 'delete'])->name('delete');
});