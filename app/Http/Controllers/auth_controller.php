<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class auth_controller extends Controller
{
    

    public function login(Request $request)
    {
        $request->validate([
            'email'=>['required','email'],
            'password'=>['required','string']
        ]);
        $user = User::where('email', $request->email)->first();
        if (is_null($user)) {
            return response()->json(['message' => 'User not found!'], 401);
        }
        if (!Hash::check($request->password, $user->password, [])) {
            return response()->json(['message' => 'Wrong credentials'], 401);
        }
        $token = $user->createToken('authToken');
        return ['token' => $token->plainTextToken];
    }
}
