<?php

namespace App\Http\Controllers;

use App\Models\StudentProject;
use App\Models\StudentRegistration;
use App\Models\Teacher;
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

    // assign supervisor form and data
    public function assignSupervisor($stdRegId) {
        // get student reg. data with semester and student info.
        $studentRegistrationData = StudentRegistration::with('student', 'semester')
            ->where('std_reg_status', 'active')
            ->where('std_reg_id', $stdRegId)
            ->first();

        // get teacher info.
        $teachers = Teacher::where('status', 'active')->get();

        return view('pending-registered-students.assign-supervisor', compact('studentRegistrationData', 'teachers'));
    }

    // store new project data with supervisor
    public function newProject(Request $request) {
        // validation
        $formFields = $request->validate([
            'assigned_supervisor' => 'required',
            'studentId' => 'required',
            'stdRegId' => 'required',
            'sem_id' => 'required'
        ]);

        $std_project = new StudentProject();
        $std_project->fk_std_id = $formFields['studentId'];
        $std_project->fk_teacher_id = $formFields['assigned_supervisor'];
        $std_project->fk_sem_id = $formFields['sem_id'];

        // store data on student project table
        $std_project->save();
        
        // update also std_reg table to done
        $stdRegItem = StudentRegistration::where('std_reg_status', 'active')
            ->where('std_reg_id', $formFields['stdRegId'])
            ->first();

        $stdRegItem->std_reg_status = 'done';

        $stdRegItem->save();
        
        return redirect('/pending-registered-students/pending-list');
    }
}
