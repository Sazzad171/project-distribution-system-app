<?php

namespace App\Http\Controllers;

use App\Models\RegisteredFields;
use App\Models\StudentRegistration;
use Illuminate\Http\Request;
use App\Models\Timeline;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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

        // get current user
        $user_id = Auth::User()->std_id; 

        // check this user is registered or not
        $studentRegistrationStatus = StudentRegistration::where('fk_std_id', $user_id)->get();

        return view('registerMyProject', compact('currentTimelineData', 'timelineItem', 'fieldItems', 'studentRegistrationStatus'));
    }

    // store my project field data
    public function store(Request $request) {
        $user_id = Auth::User()->std_id;

        // validation
        $formFields = $request->validate([
            'field1' => 'required'
        ]);
        $std_registration = new StudentRegistration();
        $std_registration->fk_std_id = $user_id;
        $std_registration->fk_tl_id = $request->fk_tl_id;
        $std_registration->fk_sem_id = $request->fk_sem_id;
        $std_registration->field1 = $formFields['field1'];
        $std_registration->field2 = $request->field2;
        $std_registration->field3 = $request->field3;
        $std_registration->field4 = $request->field4;
        $std_registration->field5 = $request->field5;
        $std_registration->field6 = $request->field6;
        $std_registration->field7 = $request->field7;
        $std_registration->field8 = $request->field8;
        $std_registration->field9 = $request->field9;
        $std_registration->field10 = $request->field10;
        $std_registration->field11 = $request->field11;
        $std_registration->field12 = $request->field12;
        $std_registration->field13 = $request->field13;
        $std_registration->field14 = $request->field14;
        $std_registration->field15 = $request->field15;

        $std_registration->save();

        // store student registration id to student table also
        $obj_user = User::where('std_id', $user_id)->first();
        $obj_user->fk_std_registration = $std_registration->std_reg_id;
        $obj_user->save();

        Session::flash('message', 'Project Registration Successfully Done!');

        return redirect('/');
    }
}
