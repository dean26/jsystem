<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            return response()->json([
                'status' => 'Dane niepoprawne',
            ]);
        }

        $user = User::query()
        ->where('email', $request['email'])
        ->first();

        $token = $user->createToken('token')->plainTextToken;

        return response()->json([
            'status' => 'OK',
            'token' => $token,
        ]);
    }
}
