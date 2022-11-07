<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupervisorContactController extends Controller
{
    // show conversations
    public function index() {
        // identify this student
        $userId = Auth::User()->std_id;
        $myIdentity = Student::where('std_id', $userId)->first();

        // all message of this student
        $myMessages = Message::where('fk_stdnt_id', $myIdentity->std_id)->orWhere('fk_teacher_id', $myIdentity->fk_teacher_id)->get();

        return view('supervisor-contact', compact('myMessages'));
    }

    // store message
    public function storeMessage(Request $request) {

        return redirect()->back();
    }
}
