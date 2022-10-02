<?php

namespace App\Http\Controllers;

use App\Models\Semester;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class SemesterController extends Controller
{
    // get all semester
    public function index() {
        $semester = Semester::where('sem_status', 'active')->orderBy('created_at', 'desc')->paginate(20);
        
        return view('semester.semesters', ['semesters' => $semester]);
    }


    // create semester form
    public function create() {
        return view('semester.addSemester');
    }

    // store new semester
    public function store(Request $request) {
        // validation
        $formFields = $request->validate([
            'sem_name' => 'required',
            'sem_year' => 'required'
        ]);
        $formFields['sem_title'] = $formFields['sem_name'] . ' - ' . $formFields['sem_year'];

        // store at DB
        Semester::create($formFields);

        // show message
        Session::flash('message', 'Semester Created Successfully');
        
        return redirect('/semester');
    }


    // show update form
    public function edit($id) {
        $semesterDetails = Semester::where('sem_id', $id)->first();

        return view('semester.editSemester', ['semesterDetails' => $semesterDetails]);
    }

    // update semester data
    public function update(Request $request, Semester $semester) {
        // validation
        $formFields = $request->validate([
            'sem_name' => 'required',
            'sem_year' => 'required'
        ]);
        $formFields['sem_title'] = $formFields['sem_name'] . ' - ' . $formFields['sem_year'];

        // store at DB
        $semester->update($formFields);

        // show message
        Session::flash('message', 'Semester Edited Successfully!');

        return redirect('/semester');
    }


    // inactive any semester
    public function delete(Semester $semester) {
        $field['sem_status'] = 'inactive';

        $semester->update($field);

        Session::flash('message', 'Semester deactivated sucessfully!');

        return redirect('/semester');
    }
}
