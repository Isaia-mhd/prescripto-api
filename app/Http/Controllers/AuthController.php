<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Validation\ValidationException;
// use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{


    public function getUser(Request $request){
         // Retrieve the authenticated user
         $user = Auth::user();

         if ($user) {
             return response()->json([
                 'success' => true,
                 'user' => $user,
             ], 200);
         }

         return response()->json([
             'success' => false,
             'message' => 'Unauthorized',
         ], 401);
    }

    public function register(Request $request)
    {
        // Définir les règles de validation
        $rules = [
            "name" => "required|string|min:3",
            "email" => "required|email|unique:users",
            "password" => "required|min:3"
        ];

        // Effectuer la validation
        $validator = Validator::make($request->all(), $rules);

        // Si la validation échoue
    if ($validator->fails()) {
        return response()->json([
            "status" => "error",
            "message" => "Validation failed",
            "errors" => $validator->errors(), // Retourne les messages d'erreur
        ], 422);
    }

        // Validation réussie
        $validated = $validator->validated();

        // Créer l'utilisateur
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);

        // Générer un token pour l'utilisateur
        $token = $user->createToken($validated['name'])->plainTextToken;

        // Retourner une réponse JSON
        return response()->json([
            "user" => $user,
            "token" => $token,
        ], 201);
    }



    public function login(Request $request)
    {
        try {
            $validated = $request->validate([
                "email" => "required|email|exists:users",
                "password" => "required"
            ]);


            $user = User::where("email", $request->email)->first();
            if(!$user || !Hash::check($request->password, $user->password )){
                return response()->json([
                    "message" => "The provided credentials are incorrect"
                ], 422);
            }

            $token = $user->createToken($user->name)->plainTextToken;
            return response()->json([
                "user" => $user,
                "token" => $token
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                "error" => $e->errors(),
             ], 422);// 422 Unprocessable Entity
        } catch(\Throwable $st){
            return response()->json([
                "error" => "Something went wrong, try again"
            ], 500); // Internal Server Error
        }

    }


    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json([
            'success' => true,
            'message' => 'User logged out from all devices.',
        ], 200);
    }


}
