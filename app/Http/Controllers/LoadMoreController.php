<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class LoadMoreController extends Controller
{
    public function loadmore(Request $request)  {
        $results = Product::orderBy('id')->paginate(12);
        $artilces = '';
        if ($request->ajax()) {
            foreach ($results as $result) {
                $artilces.='<div class="card mb-2"> <div class="card-body">'.$result->id.' <h5 class="card-title">'.$result->product_name.'</h5> '.$result->product_name.'</div></div>';
            }
            return $artilces;
        }
        return view('loadmore/index');
    }    
}
