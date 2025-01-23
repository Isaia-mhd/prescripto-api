<?php

namespace App\Http\Controllers;

use App\Models\Specialty;
use Illuminate\Http\Request;

class SpecialtyController extends Controller
{
    public function allSpecialty(){
        return response()->json(Specialty::all());
    }

    public function getSpecialty(Specialty $specialty){
        return response()->json($specialty);
    }

    public function addSpecialty(Request $request){
        try {
            $validated = $request->validate([
                "specialty" => "required|min:3|unique:specialties"
            ]);

            $specialty = Specialty::create($validated);
            return response()->json([
                $specialty, 
                "message" => "Specialty added successfully"]);
            
        } catch (\Throwable $th) {
            return response()->json(["error" => "mis erreur"]);
        }
    }
}
