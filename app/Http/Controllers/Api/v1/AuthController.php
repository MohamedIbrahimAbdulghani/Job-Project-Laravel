<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ValidationAboutSignIn;


class AuthController extends Controller
{
    public function signIn(ValidationAboutSignIn $request) {
        $credentials = $request->only('email', 'password');
        $token = auth('api')->attempt($credentials);
        if(!$token) {
            return response()->json(['Message' => 'Unauthorized access!'], 401);
        }
        return response()->json(['access_token' => $token, 'expires_in' => auth('api')->factory()->getTTL() * 60]);
    }
    public function refresh() {

    }
    public function me() {

    }
    public function logout() {

    }
}
