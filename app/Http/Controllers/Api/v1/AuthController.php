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
        return response()->json(['access_token' => $token, 'expires_in' => auth('api')->factory()->getTTL() * 60], 200);
    }
    public function refresh() {
        $refreshToken = auth('api')->refresh();
        return response()->json(['refresh_token' => $refreshToken, 'expires_in' => auth('api')->factory()->getTTL() * 60], 200);
    }
    public function me() {
        $user = auth('api')->user();
        return response()->json(["data" => $user], 200);
    }
    public function logout() {
        auth('api')->logout();
        return response()->json(["Message" => "Logged out successfully! "], 200);
    }
}
