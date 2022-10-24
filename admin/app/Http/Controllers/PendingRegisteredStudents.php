<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendingRegisteredStudents extends Controller
{
    //pending list data
    public function index() {
        

        return view('project-record.unassignedProjectRecord');
    }
}
