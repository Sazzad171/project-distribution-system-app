<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //show login form
    public function login() {
        return view('auth.login');
    }

    // login attempt
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'tchr_email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'Loggedin successfully!');
        }

        return back()->withErrors(['tchr_email' => 'Invalid Credentials'])->onlyInput('tchr_email');
    }

    // logout
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'Logout successfully!');
    }
}
