<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RepresentativeController extends Controller
{
    public function register()
    {
        return view('reps.register');
    }
}
