<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentProjectsController extends Controller
{
    //project list
    public function index() {

        return view('student-projects.completedProject');
    }
}
