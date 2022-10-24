<?php

namespace App\Http\Controllers;

use App\Models\StudentRegistration;
use App\Models\Timeline;
use Illuminate\Http\Request;

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

        // check this user is registered or not
        $studentRegistrationStatus = StudentRegistration::where('fk_std_id', '1')->get();
        

        return view('dashboard', compact('timelineActiveData', 'studentRegistrationStatus'));
    }
}
