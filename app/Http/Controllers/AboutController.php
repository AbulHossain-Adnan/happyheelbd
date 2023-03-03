<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function aboutuspage()
    {
        return view('pages/aboutus');
    }
}