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

    // store message
    public function storeMessage(Request $request) {
        $userId = Auth::user()->tchr_id;
        // store text msg as teacher
        $teachermsg = new Message();
        $teachermsg->msg_text = $request->message;
        $teachermsg->fk_teacher_id = $userId;
        $teachermsg->save();

        return redirect()->back();
    }

    // store message files
    public function storeFile(Request $request) {
        // check the file is zip
        $request->validate([
            'messageFile' => 'required|mimes:zip,rar|max:5072',
        ]);

        $userId = Auth::user()->tchr_id;
        // store file as teacher
        $teacherMsg = new Message();
        $teacherMsg->fk_teacher_id = $userId;

        if ($request->hasFile('messageFile')) {
            $teacherMsg->msg_file = $request->file('messageFile')->store('message-files', 'public');
        }

        $teacherMsg->save();

        return redirect()->back()-with("message", "File uploaded successfully!");
    }
}
