<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))){
            $token = $request->user()->createToken('invoice')->plainTextToken;

            return response()->json(['message' => 'Login successful', 'token' => $token], 200);
        }
        return response()->json(['message' => 'Not Authorized'], 403);
    }
    public function logout()
    {
    }
}
