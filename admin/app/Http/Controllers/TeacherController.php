<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

class TeacherController extends Controller
{
    // show all teachers
    public function index() {
        $teachers = Teacher::where('status', 'active')->orderBy('created_at', 'DESC')->paginate(20);
        
        return view('teacher.teachers', ['teachers' => $teachers]);
    }


    // show create teacher form
    public function create() {
        return view('teacher.addTeachers');
    }

    // store new teacher value
    public function store(Request $request) {
        // validation
        $formFields = $request->validate([
            'tchr_name' => 'required',
            'tchr_email' => ['required', 'email', Rule::unique('student', 'std_email')],
            'tchr_phone' => ['required', Rule::unique('teacher', 'tchr_phone')],
            'tchr_password' => 'required|min:6'
        ]);

        // hash password
        $formFields['tchr_password'] = bcrypt($formFields['tchr_password']);

        // store at DB
        Teacher::create($formFields);

        // show message
        Session::flash('message', 'Teacher added successfully!');

        return redirect('/teacher');
    }
}
