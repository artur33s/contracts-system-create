<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function dashboard(){
        return view('landing.dashboard');
    }
}
