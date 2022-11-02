<?php

namespace App\Http\Controllers;

use App\Models\StudentProjects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyProjectController extends Controller
{
    // show project details
    public function index() {
        // project data of this student
        $userId = Auth::User()->std_id;
        $projectDetails = StudentProjects::where('fk_std_id', $userId)
            ->with('teacher', 'semester')
            ->first();

        return view('myProject', compact('projectDetails'));
    }
}
