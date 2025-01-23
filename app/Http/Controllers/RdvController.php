<?php

namespace App\Http\Controllers;

use App\Models\Rdv;
use App\Models\User;
use Illuminate\Http\Request;

class RdvController extends Controller
{
    public function index(){
        return response()->json(Rdv::all());
    }
    public function getForDoctor(User $doctor){
        try {
            $appointment = Rdv::where("doctor_id", $doctor->id)->get();
            return response()->json($appointment, 200);
        } catch (\Throwable $th) {
            return response()->json(["error" => $th->getMessage()]);
        }
    }
    public function getForUser(){
        try {
            $rdv = Rdv::with("doctor")->get();
            
            return response()->json([
                "data" => $rdv
            ], 200);
        } catch (\Throwable $th) {
            return response()->json(["error" => $th->getMessage()]);
        }
    }

    public function add(Request $request ){
        try {
            $request->validate([
                "doctor_id" => "uuid",
                "user_id" => "integer",
                "date" => "string",
                "time" => "string"
            ]);
            $appointment = Rdv::create($request->all());
            return response()->json($appointment, status:200);
        } catch (\Throwable $th) {
            return response()->json(["error" => $th->getMessage()]);
        }
    }

    public function cancel(Rdv $rdv){
        $appointment = Rdv::find($rdv);
        $appointment->update([
            "isCanceled" => true
        ]);
    }
}
