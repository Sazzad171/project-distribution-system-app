<?php

namespace App\Http\Controllers;

use App\Models\StudentRegistration;
use Illuminate\Http\Request;

class PendingRegisteredStudentsController extends Controller
{
    //pending list data
    public function index() {
        $studentRegistrationData = StudentRegistration::with('student', 'semester')
            ->where('std_reg_status', 'active')
            ->get();

        return view('pending-registered-students.pendingRegisteredStudent', ['studentRegistrationData' => $studentRegistrationData]);
    }

    // assign supervisor form
    public function assignSupervisor() {

        return view('pending-registered-students.assign-supervisor');
    }
}
