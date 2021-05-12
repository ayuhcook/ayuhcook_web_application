<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function showSignInForm()
    {
        return view('Home.login');
    }

    public function signIn()
    {
        //
    }

    public function signOut()
    {
        //
    }
}
