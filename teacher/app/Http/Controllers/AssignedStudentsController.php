<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentProjects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssignedStudentsController extends Controller
{
    //show students data
    public function index() {
        // my students
        $user_id = Auth::User()->tchr_id;
        $myStudents = Student::with('studentProject')
            ->where('fk_teacher_id', $user_id)
            ->paginate(20);

        return view('myStudents', compact('myStudents'));
    }

    // student details
    public function details($std_id) {
        $studentDetail = Student::with('studentProject')
            ->where('std_id', $std_id)
            ->first();

        return view('studentDetails', compact('studentDetail'));
    }

    // update student info
    public function updateStudentInfo(Request $request, $proj_id) {
        $studentProject = StudentProjects::where('std_proj_id', $proj_id)->first();
        $studentProject->std_proj_name = $request->std_proj_name;
        $studentProject->status = $request->status;
        $studentProject->public_project = $request->public_project;
        $studentProject->save();

        return redirect()->back()->with('message', 'Student data upated successfully!');
    }
}
