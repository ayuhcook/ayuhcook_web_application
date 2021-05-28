<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        if(!Auth::guest()) {
            return redirect('/');
        }

        return view('Home.register');
    }

    public function store(Request $request)
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

    public function show($id)
    {
        $user = User::findOrFail($id);
        $contribution_count = User::findOrFail($id)->recipes()->count();
        $recipes = User::findOrFail($id)->recipes;

        return view('User.index', compact('user', 'contribution_count', 'recipes'));
    }

    public function edit($id)
    {
        $user = User::findOrFail(Auth::user()->id);

        return view('User.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $this->validateUpdateForm($request);
        $credentials = $request->only(['f_name', 'l_name', 'email', 'gender', 'profession', 'country', 'description']);
        User::find(Auth::user()->id)->update($credentials);

        return redirect()->back()->with('message', 'The personal credential has been updated');
    }

    public function updatePassword(Request $request, $id)
    {
        $this->validatePassword($request);

        if($request->password == $request->password2) {
            User::find(Auth::user()->id)->update([
                'password' => Hash::make($request->password),
            ]);

            return redirect()->back()->with('message', 'The password has been updated');
        }

        return redirect()->back()->withErrors([
            'password' => 'The password do not match'
        ]);
    }

    public function updateProfileImage($id, Request $request)
    {
        $this->validateProfileImage($request);
        $user = User::find(Auth::user()->id);

        if($user->profile_image) {
            unlink(public_path('storage/'.$user->profile_image));
        } else {
            // do nothing
        }

        $imageStorePath = $request->file('profile_image')->storePublicly('/public');
        $imageName = pathinfo($imageStorePath)['basename'];
        User::find(Auth::user()->id)->update(['profile_image' => $imageName]);

        return redirect()->back()->with('message', 'The profile image has been updated');
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
            'email' => 'unique:users,email|required|email|max:255',
            'password' => 'required|min:5|max:255',
            'gender' => 'required',
            'profession' => 'required',
            'country' => 'required',
        ]);
    }

    public function validateUpdateForm($request)
    {
        return $request->validate([
            'f_name' => 'required|max:255',
            'l_name' => 'required|max:255',
            'gender' => 'required',
            'profession' => 'required',
            'country' => 'required',
            'description' => 'max:400',
        ]);
    }

    public function validatePassword($request)
    {
        return $request->validate([
            'password' => 'required|min:5'
        ]);
    }

    public function validateProfileImage($request)
    {
        return $request->validate([
            'profile_image' => 'required|mimes:png,jpg,jpeg'
        ]);
    }
}
