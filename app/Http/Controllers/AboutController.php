<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class About extends Controller
{
    public function welcome()
    {
        return view('pages.about');
    }
}
