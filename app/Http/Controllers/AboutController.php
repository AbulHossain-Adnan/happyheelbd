<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Brand;

class AboutController extends Controller
{
    public function aboutuspage()
    {
         $category_products = Brand::get();
        return view('pages/aboutus',compact('category_products'));
    }
}