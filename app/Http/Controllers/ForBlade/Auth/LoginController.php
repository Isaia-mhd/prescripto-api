<?php

namespace App\Http\Controllers\ForBlade\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view("Pages.Auth.Login");
    }
}
