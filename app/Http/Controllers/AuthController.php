<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\ValidationAboutSignUp;
use App\Http\Requests\ValidationAboutSignIn;

class AuthController extends Controller
{
    // 5 Methods For Authentication

    public function ShowSignUp() {
        return view('auth.signup');
    }
    // this function to make login
    public function SignUp(ValidationAboutSignUp $request) {
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
    public function SignIn(ValidationAboutSignIn $request) {
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
        } else {
            return back()->withErrors(['email' => 'The provided credentials do not match our records']);
        }
        return redirect('/');
    }
    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
