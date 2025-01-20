<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\SpecialtyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/doctors", [DoctorController::class, "index"]);
Route::post("/doctors", [DoctorController::class, "store"]);
Route::get("/doctors/{doctor} ", [DoctorController::class, "show"]);
Route::put("/doctors/{id} ", [DoctorController::class, "update"]);
Route::delete("/doctors/{doctor} ", [DoctorController::class, "destroy"]);

Route::get("get-specialty", [SpecialtyController::class, "allSpecialty"]);
Route::get("get-specialty/{specialty} ", [SpecialtyController::class, "getSpecialty"]);



// AUTHENTICATION
Route::post("register", [AuthController::class, "register"]);
Route::post("login", [AuthController::class, "login"]);
Route::post("logout", [AuthController::class, "logout"])->middleware('auth:sanctum');