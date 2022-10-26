<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\PendingRegisteredStudentsController;
use App\Http\Controllers\StudentProjectsController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\UserController;

// login show
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// login attempt
Route::post('user/authenticate', [UserController::class, 'authenticate'])->name('authenticate')->middleware('guest');

Route::group(['middleware' => 'auth'], function () {
    // logout
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');

    // dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

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

    // register timeline
    Route::group(['prefix' => 'timeline', 'as' => 'timeline.'], function () {
        Route::get('/', [TimelineController::class, 'index'])->name('list');

        Route::get('/create', [TimelineController::class, 'create'])->name('create');
        Route::post('/store', [TimelineController::class, 'store'])->name('store');

        Route::get('/edit/{id}', [TimelineController::class, 'edit'])->name('edit');
        Route::post('/update/{timeline}', [TimelineController::class, 'update'])->name('update');

        // Route::get('/delete/{timeline}', [TimelineController::class, 'delete'])->name('delete');
    });

    // pending registered students & assign supervisor
    Route::group(['prefix' => 'pending-registered-students', 'as' => 'pendingRegisteredStudents.'], function () {
        Route::get('/pending-list', [PendingRegisteredStudentsController::class, 'index'])->name('pendingRecords');

        Route::get('/assign-supervisor/{stdRegId}', [PendingRegisteredStudentsController::class, 'assignSupervisor'])->name('assignSupervisor');

        Route::post('/new-project', [PendingRegisteredStudentsController::class, 'newProject'])->name('newProject');
        
    });

    // student project
    Route::group(['prefix' => 'student-projects', 'as' => 'studentProjects.'], function () {
        Route::get('/', [StudentProjectsController::class, 'index'])->name('list');
        
    });
});