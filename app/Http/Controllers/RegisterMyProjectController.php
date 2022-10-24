<?php

namespace App\Http\Controllers;

use App\Models\RegisteredFields;
use Illuminate\Http\Request;
use App\Models\Timeline;

class RegisterMyProjectController extends Controller
{
    //show form
    public function index() {
        date_default_timezone_set('Asia/Dhaka');

        // get timeline data
        // $timelineActiveData = Timeline::with('semester', 'registeredFields')
        //     ->where('tl_status', 'active')
        //     ->where('tl_start', '<', date('Y-m-d H:i:s'))
        //     ->where('tl_end', '>', date('Y-m-d H:i:s'))
        //     ->first();

        $timelineActiveData = RegisteredFields::with('timeline', 'field')
        // ->where('timeline.tl_status', 'active')
        // ->where('timeline.tl_start', '<', date('Y-m-d H:i:s'))
        // ->where('timeline.tl_end', '>', date('Y-m-d H:i:s'))
        ->get();

        dd($timelineActiveData);

        return view('registerMyProject', ['timelineActiveData' => $timelineActiveData]);
    }
}
