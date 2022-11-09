<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentContactController extends Controller
{
    // show message page
    public function index($std_id) {
        // identify this teacher
        $userId = Auth::User()->tchr_id;
        $myIdentity = User::where('tchr_id', $userId)->first();

        // all message of this student
        $myMessages = Message::where('fk_stdnt_id', $std_id)
            ->orWhere('fk_teacher_id', $myIdentity->tchr_id)
            ->orderBy('created_at', 'desc')
            ->paginate(8);

        return view('student-contact', compact('myMessages'));
    }
}
