<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function register(Request $request )
    {
        try {
            $validated = $request->validate([
                "name" => "required|string|min:3",
                "email" => "required|email|unique:users",
                "password" => "required"
            ]);

            $user = User::create($validated);

            $token = $user->createToken($request->name)->plainTextToken;
            return response()->json([
                "user" => $user,
                "token" => $token
            ]);
        } catch (\Throwable $th) {
            return response()->json(["error" => "Something went wrong! Try again"]);
        }
    }


    public function login(Request $request)
    {
        try {
            $request->validate([
                "email" => "required|email|exists:users",
                "password" => "required"
            ]);


            $user = User::where("email", $request->email)->first();
            if(!$user || !Hash::check($request->password, $user->password )){
                return [
                    "message" => "The provided credentials are incorrect"
                ];
            }

            $token = $user->createToken($user->name)->plainTextToken;
            return response()->json([
                "user" => $user,
                "token" => $token
            ]);
        } catch (\Throwable $th) {
            return response()->json(["error" => "something wrong! maybe the email does not exist in our database"]);
        }
    }


    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        return [
            "message" => "You are logged out"
        ];
    }


}
