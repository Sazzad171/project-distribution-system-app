<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // get all students
    public function index() {

        return view('student.students');
    }

    // create student form
    public function create() {

        return view('student.addStudent');
    }

    // store new student
    public function store(Request $request) {
        // validation
        $formFields = $request->validate([
            'std_name' => 'required',
            'std_email' => 'required',
            'std_phone' => 'required',
            'password' => 'required'
        ]);

        // store at DB
        Student::create($formFields);

        // show message
        Session::flash('message', 'Student Created Successfully');
        
        return redirect('/');
    }
}
