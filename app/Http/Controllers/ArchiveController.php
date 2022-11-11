<?php

namespace App\Http\Controllers;

use App\Models\StudentProjects;
use Illuminate\Http\Request;

class ArchiveController extends Controller
{
    // show archvie page data
    public function index() {
        $projects = StudentProjects::where('public_project', 'yes')->paginate(12);

        return view('archives', ['projects' => $projects]);
    }
}
