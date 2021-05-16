<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function showSignInForm()
    {
        if(!Auth::guest()) {
            return redirect('/');
        }

        return view('Home.login');
    }

    public function signIn(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();

            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'The provided credential do not match our records'
        ]);
    }

    public function signOut()
    {
        if(!Auth::guest()) {
            Auth::logout();

            return redirect('/sign-in')->with('message', 'You have been successfully sign out from the website ;D');
        }

        return abort(401);
    }
}
