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

        // all message of this teacher
        // $myMessages = Message::where('fk_stdnt_id', $std_id)
        //     ->orWhere('fk_teacher_id', $myIdentity->tchr_id)
        //     ->where('msg_file', null)
        //     ->orderBy('created_at', 'desc')
        //     ->paginate(8);
        $myMessages = Message::where('msg_file', null)
            ->where(
                function ($query) use ($myIdentity, $std_id) {
                    $query->where('fk_stdnt_id', $std_id)
                        ->orWhere('fk_teacher_id', $myIdentity->tchr_id);
                }
            )
            ->orderBy('created_at', 'desc')
            ->paginate(8);

        // all files of this teacher
        // $myFiles = Message::where('fk_stdnt_id', $std_id)
        //     ->orWhere('fk_teacher_id', $myIdentity->tchr_id)
        //     ->orderBy('created_at', 'desc')
        //     ->get();

        $myFiles = Message::where('msg_file', '!=', null)
            ->where(
                function ($query) use ($myIdentity, $std_id) {
                    $query->where('fk_stdnt_id', $std_id)
                        ->orWhere('fk_teacher_id', $myIdentity->tchr_id);
                }
            )
            ->orderBy('created_at', 'desc')
            ->paginate(8, ['*'], 'file_page');

        return view('student-contact', compact('myMessages', 'myFiles'));
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
            'messageFile' => 'required|max:5072',
        ]);

        // check it is zip file
        if ( $request->file('messageFile')->extension() === "zip" || $request->file('messageFile')->extension() === "rar" ) {
            $userId = Auth::user()->tchr_id;
            // store file as teacher
            $teacherMsg = new Message();
            $teacherMsg->fk_teacher_id = $userId;
    
            if ($request->hasFile('messageFile')) {
                $teacherMsg->msg_file = $request->file('messageFile')->store('message-files', 'public');
            }
    
            $teacherMsg->save();
    
            return redirect()->back()->with("message", "File uploaded successfully!");
        }
        else {
            return redirect()->back()->with("message", "Only zip/rar files is available for send!");
        }
        
    }
}
