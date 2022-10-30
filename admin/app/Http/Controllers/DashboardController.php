<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\Timeline;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index () {
        // active timeline
        date_default_timezone_set('Asia/Dhaka');

        // get timeline data if active
        $currentTimelineData = Timeline::where('tl_status', 'active')
            ->with('semester')
            ->where('tl_start', '<', date('Y-m-d H:i:s'))
            ->where('tl_end', '>', date('Y-m-d H:i:s'))
            ->get();

        // total teacher
        $teachers = Teacher::where('status', 'active')->count();

        // total students
        $students = Student::where('std_status', 'active')->count();

        return view('dashboard', compact('currentTimelineData', 'teachers', 'students'));
    }
}
