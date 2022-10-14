<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index () {
        // total teacher
        $teachers = Teacher::where('status', 'active')->count();

        // total students
        $students = Student::where('std_status', 'active')->count();

        return view('dashboard', compact('teachers', 'students'));
    }
}
