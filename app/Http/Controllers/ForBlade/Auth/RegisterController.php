<?php

namespace App\Http\Controllers\ForBlade\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        return view("Pages.Auth.Register");
    }
}
