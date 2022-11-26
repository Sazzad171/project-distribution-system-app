<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\StudentProjects;
use Illuminate\Http\Request;

class ArchiveController extends Controller
{
    // show archvie page data
    public function index() {
        $projects = StudentProjects::with('student')
            ->with('teacher')
            ->where('public_project', 'yes')
            ->paginate(12);

        // set project file
        foreach ($projects as $projItem) {
            $student = $projItem->student->std_id;

            $projectLInks[] = Message::where('fk_stdnt_id', $student)
                ->where('msg_text', null)
                ->latest('updated_at')
                ->first();
        }

        return view('archives', compact('projectLInks', 'projects'));
    }
}
