<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\TryCatch;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return response()->json(Doctor::all());
        } catch (\Throwable $th) {
            return response()->json(["error" => $th]);
        }
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validated = request()->validate([
                "name" => "required",
                "specialty" => "required",
                "degree" => "required",
                "experience" => "required",
                "about" => "required",
                "fees" => "required",
                "status" => "required",
                "address" => "required",
                "image" => "nullable|image"
            ]);

            if (request()->hasFile('image')) {
                $imgPath = request()->file('image')->store("doctors", "public");;
                $validated['image'] = $imgPath;
            }

            $doctors = Doctor::create($validated);
            return response()->json($doctors);

        } catch (\Throwable $th) {
            return response()->json(["error" => $th]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {

        $doctor = Doctor::find($doctor);
        if(!$doctor){
            return response()->json(["error" => "Doctor not found!"], 404);
        }

        return response()->json($doctor, 200);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
{
    try {
        $validated = request()->validate([
            "name" => "nullable|string",
            "specialty" => "nullable|string",
            "degree" => "nullable|string",
            "experience" => "nullable|string",
            "about" => "nullable|string",
            "fees" => "nullable|numeric",
            "status" => "nullable|string",
            "address" => "nullable|string",
            "image" => "nullable|image"
        ]);

        if (request()->hasFile('image')) {
            $imgPath = request()->file('image')->store("doctors", "public");;
            $validated['image'] = $imgPath;
        }

        $updated = Doctor::find($id);

        $updated->update($validated);

        return response()->json([
            "data" => $updated,
            "message" => "Updated"
        ]);
    } catch (\Illuminate\Validation\ValidationException $e) {
        return response()->json(["errors" => $e->errors()], 422);
    } catch (\Throwable $th) {
        return response()->json(["error" => "Could not update"], 500);
    }
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return response()->json(["message" => "Doctor deleted successfully!"]);
    }
}
