<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentProjects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // show dashboard
    public function index() {
        // total students
        $totalStudents = Student::where('std_status', 'active')->get();

        // my students
        $user_id = Auth::User()->tchr_id;
        $myStudents = Student::where('fk_teacher_id', $user_id)->get();

        // my completed projects
        $myCompletedProjects = StudentProjects::where('fk_teacher_id', $user_id)
            ->where('status', 'Done')
            ->get();

        return view('dashboard', compact('totalStudents', 'myStudents', 'myCompletedProjects'));
    }
}
