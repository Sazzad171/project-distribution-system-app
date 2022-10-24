<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    // get all students
    public function index() {
        $students = Student::where('std_status', 'active')->orderBy('created_at', 'desc')->paginate(20);
        
        return view('student.students', ['students' => $students]);
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
            'std_varsity_id' => ['required', Rule::unique('student', 'std_varsity_id')],
            'std_email' => ['required', 'email', Rule::unique('student', 'std_email')],
            'std_phone' => 'required',
            'password' => 'required|min:6'
        ]);

        // hash password
        $formFields['password'] = bcrypt($formFields['password']);

        // store at DB
        Student::create($formFields);

        // show message
        Session::flash('message', 'Student Created Successfully');
        
        return redirect('/student');
    }


    // show update form
    public function edit($id) {
        $studentDetails = Student::where('std_id', $id)->first();

        return view('student.editStudent', ['studentDetails' => $studentDetails]);
    }

    // update student data
    public function update(Request $request, Student $student) {
        // validation
        $formFields = $request->validate([
            'std_name' => 'required',
            'std_phone' => 'required'
        ]);

        // hash password
        if ($request->password) {
            $formFields['password'] = bcrypt($request->password);
        }

        // store at DB
        $student->update($formFields);

        // show message
        Session::flash('message', 'Student Edited Successfully!');

        return redirect('/student');
    }


    // inactive any student
    public function delete(Student $student) {
        $field['std_status'] = 'inactive';

        $student->update($field);

        Session::flash('message', 'Student deactivated sucessfully!');

        return redirect('/student');
    }
}
