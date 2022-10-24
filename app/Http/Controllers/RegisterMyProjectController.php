<?php

namespace App\Http\Controllers;

use App\Models\RegisteredFields;
use App\Models\StudentRegistration;
use Illuminate\Http\Request;
use App\Models\Timeline;
use Illuminate\Support\Facades\Session;

class RegisterMyProjectController extends Controller
{
    //show form
    public function index() {
        date_default_timezone_set('Asia/Dhaka');

        // get timeline data if active
        $currentTimelineData = Timeline::where('tl_status', 'active')
            ->where('tl_start', '<', date('Y-m-d H:i:s'))
            ->where('tl_end', '>', date('Y-m-d H:i:s'))
            ->first();

        // get all registered fields data
        $timelineActiveData = RegisteredFields::with([
            'timeline' => function($q) {
                $q->where('timeline.tl_status', 'active');
                $q->where('timeline.tl_start', '<', date('Y-m-d H:i:s'));
                $q->where('timeline.tl_end', '>', date('Y-m-d H:i:s'));
            }, 
            'field'
        ])
        ->get();

        // active timeline data with field id
        $timelineItem = [];
        foreach($timelineActiveData as $item) {
            if ($item->timeline !== null) {
                $timelineItem[] = $item;
            }
        }

        // distinct unique fields
        $fieldItems = [];
        if ( !empty($currentTimelineData) ) {
            foreach($timelineItem as $item) {
                $fieldItems[] = $item->field;
            }
            $fieldItems = array_unique($fieldItems, SORT_REGULAR);
        }

        // check this user is registered or not
        $studentRegistrationStatus = StudentRegistration::where('fk_std_id', '1')->get();

        return view('registerMyProject', compact('currentTimelineData', 'timelineItem', 'fieldItems', 'studentRegistrationStatus'));
    }

    // store my project field data
    public function store(Request $request) {
        // validation
        $formFields = $request->validate([
            'field1' => 'required'
        ]);
        $formFields['fk_std_id'] = 1;
        $formFields['fk_tl_id'] = $request->fk_tl_id;
        $formFields['fk_sem_id'] = $request->fk_sem_id;
        $formFields['field2'] = $request->field2;
        $formFields['field3'] = $request->field3;
        $formFields['field4'] = $request->field4;

        StudentRegistration::create($formFields);

        Session::flash('message', 'Project Registration Sucessfully Done!');

        return redirect('/');
    }
}
