<?php

namespace App\Http\Controllers;

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

        return view('myProject', compact('projectDetails'));
    }

    // update student info
    public function update(Request $request) {
        // validation
        $formFields = $request->validate([
            'stdName' => 'required'
        ]);
        $formFields['stdPhone'] = $request->stdPhone;
        $formFields['projectName'] = $request->projectName;
        dd($formFields);

        // student table
        $userId = Auth::User()->std_id;

        // project table

        return redirect('my-project');
    }
}
