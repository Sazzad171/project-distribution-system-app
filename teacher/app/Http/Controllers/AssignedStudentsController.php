<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssignedStudentsController extends Controller
{
    //show students data
    public function index() {
        // my students
        $user_id = Auth::User()->tchr_id;
        $myStudents = Student::where('fk_teacher_id', $user_id)->paginate(20);

        return view('myStudents', compact('myStudents'));
    }
}
