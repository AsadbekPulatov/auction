<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request){

        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $confirm_password = $request->confirm_password;

        if ($password != $confirm_password) {
            return response()->json([
                'message' => 'Password does not match',
            ]);
        }
        else {
            $user = new User();
            $user->name = $name;
            $user->email = $email;
            $user->password = bcrypt($password);
            $user->save();
            Auth::login($user);
            $token = $user->createToken('auth_token')->plainTextToken;
            return response()->json([
                'message' => 'User created successfully',
                'token' => $token,
            ]);
        }
    }

    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'message' => 'User logged out successfully',
        ]);
    }

    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $user = Auth::user();
            $token = $user->createToken('auth_token')->plainTextToken;
            return response()->json([
                'message' => 'User logged in successfully',
                'token' => $token,
            ]);
        }
        else {
            return response()->json([
                'message' => 'Invalid credentials',
            ]);
        }
    }
}
