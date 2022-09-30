<?php

namespace App\Http\Controllers;

use App\Models\Field;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    // get all field
    public function index() {
        $field = Field::where('fld_status', 'active')->orderBy('created_at', 'desc')->paginate(20);
        
        return view('field.fields', ['fields' => $field]);
    }


    // create field form
    public function create() {
        return view('field.addField');
    }

    // store new field
    public function store(Request $request) {
        // validation
        $formFields = $request->validate([
            'fld_name' => 'required'
        ]);

        // store at DB
        Field::create($formFields);

        // show message
        Session::flash('message', 'Field Created Successfully');
        
        return redirect('/field');
    }


    // show update form
    public function edit($id) {
        $fieldDetails = Field::where('fld_id', $id)->first();

        return view('field.editField', ['fieldDetails' => $fieldDetails]);
    }

    // update field data
    public function update(Request $request, Field $field) {
        // validation
        $formFields = $request->validate([
            'fld_name' => 'required'
        ]);

        // store at DB
        $field->update($formFields);

        // show message
        Session::flash('message', 'Field Edited Successfully!');

        return redirect('/field');
    }


    // inactive any field
    public function delete(Field $field) {
        $formFields['fld_status'] = 'inactive';

        $field->update($formFields);

        Session::flash('message', 'Field deactivated sucessfully!');

        return redirect('/field');
    }
}
