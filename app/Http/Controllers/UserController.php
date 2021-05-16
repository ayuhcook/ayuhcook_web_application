<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('Home.register');
    }

    public function create(Request $request)
    {
        $this->validateRegistrationForm($request);

        $credentials = [
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
            'profession' => $request->profession,
            'country' => $request->country,
        ];

        User::create($credentials);

        return redirect('/sign-in')->with('message', 'Your account has succesfully created :D');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return view('User.index');
    }

    public function edit($id)
    {
        return view('User.edit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function resetPassword()
    {
        //
    }

    public function validateRegistrationForm($request)
    {
        return $request->validate([
            'f_name' => 'required|max:255',
            'l_name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:5|max:255',
            'gender' => 'required',
            'profession' => 'required',
            'country' => 'required',
        ]);
    }
}
