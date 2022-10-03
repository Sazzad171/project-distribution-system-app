<?php

namespace App\Http\Controllers;

use App\Models\Field;
use App\Models\Semester;
use App\Models\Timeline;
use Illuminate\Http\Request;

class TimelineController extends Controller
{
    //show all timeline
    public function index() {
        $timelines = Timeline::where('tl_status', 'active')->orderBy('created_at', 'desc')->paginate(20);

        return view('timeline.timelines', ['timelines' => $timelines]);
    }


    // show create timeline form
    public function create() {
        $semesters = Semester::where('sem_status', 'active')->orderBy('created_at', 'desc')->get();
        
        $fields = Field::where('fld_status', 'active')->orderBy('created_at', 'desc')->get();

        return view('timeline.addTimeline', ['semesters' => $semesters, 'fields' => $fields]);
    }

    // store new timeline data to db
    public function store(Request $request) {
        $formFields = $request->validate([
            'tl_semester' => 'required',
            'tl_start' => 'required',
            'tl_end' => 'required',
            'tl_field' => 'required'
        ]);

        $formFields['fk_sem_id'] = $formFields['tl_semester'];
        $formFields['tl_field'] = $request->input('tl_field');
        $formFields['fk_fld_id'] = json_encode($formFields['tl_field']);

        //store in db
        Timeline::create($formFields);
        

        return redirect('timeline')->with('message', 'Registration timeline created successfully!');
    }


    // show edit timeline form
    public function edit($id) {
        $timelineDetails = Timeline::where('tl_id', $id)->first();

        $semesters = Semester::where('sem_status', 'active')->orderBy('created_at', 'desc')->get();
        
        $fields = Field::where('fld_status', 'active')->orderBy('created_at', 'desc')->get();
        
        return view('timeline.editTimeline', ['timelineDetails' => $timelineDetails, 'semesters' => $semesters, 'fields' => $fields]);
    }
}
