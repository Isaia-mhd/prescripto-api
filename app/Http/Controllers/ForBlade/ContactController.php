<?php

namespace App\Http\Controllers\ForBlade;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view("Pages.Contact");
    }
}
