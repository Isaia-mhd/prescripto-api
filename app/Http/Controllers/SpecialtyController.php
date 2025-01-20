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
}
