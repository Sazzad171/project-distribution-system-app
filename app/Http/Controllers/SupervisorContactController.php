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
        $myMessages = Message::where('msg_file', null)
            ->where(
                function ($query) use ($myIdentity) {
                    $query->where('fk_stdnt_id', $myIdentity->std_id)
                        ->orWhere('fk_teacher_id', $myIdentity->fk_teacher_id);
                }
            )
            ->orderBy('created_at', 'desc')
            ->paginate(8);

        // all files of this student
        $myFiles = Message::where('msg_file', '!=', null)
            ->where(
                function ($query) use ($myIdentity) {
                    $query->where('fk_stdnt_id', $myIdentity->std_id)
                        ->orWhere('fk_teacher_id', $myIdentity->fk_teacher_id);
                }
            )
            ->orderBy('created_at', 'desc')
            ->paginate(8, ['*'], 'file_page');

        return view('supervisor-contact', compact('myMessages', 'myFiles'));
    }

    // store message
    public function storeMessage(Request $request) {
        $userId = Auth::user()->std_id;
        // store msg as student
        $studentMsg = new Message();
        $studentMsg->msg_text = $request->message;
        $studentMsg->fk_stdnt_id = $userId;
        $studentMsg->save();

        return redirect()->back();
    }

    // store message files
    public function storeFile(Request $request) {
        // check the file is zip
        $request->validate([
            'messageFile' => 'required|max:8072',
        ]);

        // check it is zip file
        if ( $request->file('messageFile')->extension() === "zip" || $request->file('messageFile')->extension() === "rar" ) {
            $userId = Auth::user()->std_id;
            // store file as student
            $studentMsg = new Message();
            $studentMsg->fk_stdnt_id = $userId;
    
            if ($request->hasFile('messageFile')) {
                $studentMsg->msg_file = $request->file('messageFile')->store('message-files', 'public');
            }
    
            $studentMsg->save();
    
            return redirect()->back()->with("message", "File uploaded successfully!");
        }
        else {
            return redirect()->back()->with("message", "Only zip/rar files is available for send!");
        }
    }
    
}
