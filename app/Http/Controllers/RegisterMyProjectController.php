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
        $timelineActiveData = RegisteredFields::with([
            'timeline' => function($q) {
                $q->where('timeline.tl_status', 'active');
                $q->where('timeline.tl_start', '<', date('Y-m-d H:i:s'));
                $q->where('timeline.tl_end', '>', date('Y-m-d H:i:s'));
            }, 
            'field'
        ])
        ->get();

        foreach($timelineActiveData as $item) {
            if ($item->timeline !== null) {
                $timelineItem = $item;
            }
        }
        dd($timelineItem);

        return view('registerMyProject', ['timelineActiveData' => $timelineActiveData]);
    }
}
