<?php

namespace App\Http\Controllers;

use App\Models\StudentProjects;
use App\Models\StudentRegistration;
use App\Models\Timeline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //show dashboard
    public function index() {
        date_default_timezone_set('Asia/Dhaka');

        // get timeline data
        $timelineActiveData = Timeline::where('tl_status', 'active')
            ->where('tl_start', '<', date('Y-m-d H:i:s'))
            ->where('tl_end', '>', date('Y-m-d H:i:s'))
            ->first();

        $userId = Auth::User()->std_id;

        // check this user is registered or not
        $studentRegistrationStatus = StudentRegistration::where('fk_std_id', $userId)->get();
        
        // project data of this student
        $projectDetails = StudentProjects::where('fk_std_id', $userId)
            ->with('teacher', 'semester')
            ->first();

        return view('dashboard', compact('timelineActiveData', 'studentRegistrationStatus', 'projectDetails'));
    }
}
