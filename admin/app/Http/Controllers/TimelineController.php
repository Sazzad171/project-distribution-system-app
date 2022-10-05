<?php

namespace App\Http\Controllers;

use App\Models\Field;
use App\Models\RegisteredFields;
use App\Models\Semester;
use App\Models\Timeline;
use Illuminate\Http\Request;

class TimelineController extends Controller
{
    //show all timeline
    public function index() {
        // $semester = Timeline::find(5)->semester;dd($semester);
        $timelines = Timeline::with('semester')->where('tl_status', 'active')->orderBy('created_at', 'desc')->paginate(20);

        // $timelines = Timeline::where('tl_status', 'active')->orderBy('created_at', 'desc')->paginate(20);

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

        $timeline = new Timeline();
        $timeline->fk_sem_id = $formFields['tl_semester'];
        $timeline->tl_start = $formFields['tl_start'];
        $timeline->tl_end = $formFields['tl_end'];
        // $timeline->fk_fld_id = json_encode($request->input('tl_field'));
        
        // store in timeline db
        $timeline->save();

        // for take area-fields data
        foreach ($formFields['tl_field'] as $fld_item) {
            $registeredField = new RegisteredFields();
            $registeredField->fk_timeline_id = $timeline->tl_id;
            $registeredField->fk_fld_id = $fld_item;
            $registeredField->save();
        }

        return redirect('timeline')->with('message', 'Registration timeline created successfully!');
    }


    // show edit timeline form
    public function edit($id) {
        $timelineDetails = Timeline::where('tl_id', $id)->first();

        // get all semester
        $semesters = Semester::where('sem_status', 'active')->orderBy('created_at', 'desc')->get();
        
        // get all fields
        $fields = Field::where('fld_status', 'active')->orderBy('created_at', 'desc')->get();

        // get all registered fields
        $registeredFields = RegisteredFields::all();
        
        return view('timeline.editTimeline', compact('timelineDetails', 'semesters', 'fields', 'registeredFields'));
    }

    // store updated timeline data to db
    public function update(Request $request, Timeline $timeline) {
        $formFields = $request->validate([
            'tl_semester' => 'required',
            'tl_start' => 'required',
            'tl_end' => 'required',
            'tl_field' => 'required'
        ]);

        $timeline->fk_sem_id = $formFields['tl_semester'];
        $timeline->tl_start = $formFields['tl_start'];
        $timeline->tl_end = $formFields['tl_end'];
        
        // store in timeline db
        $timeline->save();

        // for take area-fields data
        foreach ($formFields['tl_field'] as $fld_item) {
            $registeredField = new RegisteredFields();
            $registeredField->fk_timeline_id = $timeline->tl_id;
            $registeredField->fk_fld_id = $fld_item;
            $registeredField->save();
        }

        return redirect('/timeline')->with('message', 'Registration timeline Updated Successfully!');
    }
}
