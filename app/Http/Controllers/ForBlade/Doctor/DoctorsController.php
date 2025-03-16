<?php

namespace App\Http\Controllers\ForBlade\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{

    public function index()
    {

        // all docs
        return view("Pages.Doctor.All");
    }
}
