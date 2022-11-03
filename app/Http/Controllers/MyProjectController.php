<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentProjects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyProjectController extends Controller
{
    // show project details
    public function index() {
        // project data of this student
        $userId = Auth::User()->std_id;
        $projectDetails = StudentProjects::where('fk_std_id', $userId)
            ->with('teacher', 'semester')
            ->first();

        // student data
        $student = Student::where('std_id', $userId)->first();

        return view('myProject', compact('projectDetails', 'student'));
    }

    // update student info
    public function update(Request $request) {
        // validation
        $formFields = $request->validate([
            'stdName' => 'required'
        ]);

        // student table
        $userId = Auth::User()->std_id;
        $student = Student::where('std_id', $userId)->first();
        $student->std_name = $formFields['stdName'];
        $student->std_phone = $request->stdPhone;
        $student->save();

        // project table
        $stdProject = StudentProjects::where('fk_std_id', $userId)->first();
        $stdProject->std_proj_name = $request->projectName;
        $stdProject->save();

        return redirect('my-project')->with('message', 'Your data updated successfully!');
    }
}
