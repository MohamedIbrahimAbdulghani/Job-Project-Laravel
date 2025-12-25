<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    // 5 Methods For Authentication

    public function ShowSignUp() {
        return view('auth.signup');
    }
    // this function to make login
    public function SignUp(Request $request) {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        Auth::login($user); // this is to make data from user and make login about this data or can make login to user
        return redirect('/');
    }
    public function ShowSignIn() {
        return view('auth.signin');
    }
    public function SignIn(Request $request) {
        //
    }
    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
