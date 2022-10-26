<?php

namespace App\Http\Controllers;

use App\Models\StudentProject;
use Illuminate\Http\Request;

class StudentProjectsController extends Controller
{
    //project list
    public function index() {
        // all projects
        $studentProjects = StudentProject::with('student', 'teacher', 'semester')->get();

        return view('student-projects.completedProject', ['studentProjects' => $studentProjects]);
    }

    // student project details
    public function details($projId) {
        $project = StudentProject::with('student', 'teacher', 'semester')
            ->where('std_proj_id', $projId)
            ->first();

        return view('student-projects.details', ['project' => $project]);
    }
}
