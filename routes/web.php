<?php

use App\Http\Controllers\ForBlade\Auth\LoginController;
use App\Http\Controllers\ForBlade\Auth\RegisterController;
use App\Http\Controllers\ForBlade\Doctor\DoctorsController;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;


// DOCTORS
Route::get("/doctors", [DoctorsController::class, "index"])->name("doctors.all");

// AUTH
Route::get("login", [LoginController::class, "login"])->name("login");
Route::get("register", [RegisterController::class, "register"])->name("register");

// HOME
Route::get('/', function () {
    return View('Pages.Home');
});

