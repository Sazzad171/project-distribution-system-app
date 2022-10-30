<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    //show settings info
    public function index() {
        return view('settings');
    }

    // submit password
    public function store(Request $request) {
        $request->validate([
            'currentPassword' => 'required',
            'newPassword' => 'required|min:6',
            'confirmNewPassword' => 'required|min:6|same:newPassword'
        ]);

        // current user
        $user = Auth::user();

        // check current password is valid & new password matched
        if ( Hash::check( $request->currentPassword, $user->password) ) {

            $user_id = Auth::User()->id;                       
            $obj_user = User::find($user_id);
            $obj_user->password = Hash::make($request['password']);
            $obj_user->save(); 
            
            return redirect('/')->with('message' ,'Password Updated Successfully!');
        }
        else {
            return redirect('/settings')->with('message' ,'Password doesnt matched!');
        }
    }
}
