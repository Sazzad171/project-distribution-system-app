<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendingRegisteredStudents extends Controller
{
    //pending list data
    public function index() {
        

        return view('pending-registered-students.pendingRegisteredStudent');
    }

    // assign supervisor form
    public function assignSupervisor() {

        return view('pending-registered-students.assign-supervisor');
    }
}
