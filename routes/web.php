<?php

use App\Http\Controllers\ForBlade\Auth\LoginController;
use App\Http\Controllers\ForBlade\Auth\RegisterController;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;




Route::get("login", [LoginController::class, "login"])->name("login");
Route::get("register", [RegisterController::class, "register"])->name("register");
// AUTH

Route::get('/', function () {
    return View('Pages.Home');
});
// HOME

