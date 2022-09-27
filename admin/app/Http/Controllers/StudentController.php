<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // get all students
    public function index() {

        return view('student.students');
    }
}
