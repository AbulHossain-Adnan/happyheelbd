<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }
}
