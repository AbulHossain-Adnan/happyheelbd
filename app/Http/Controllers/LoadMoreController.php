<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class LoadMoreController extends Controller
{
    public function loadmore(Request $request) {
        // $users = User::paginate(10);    
        $products = Product::where('status',1)->paginate(2);    
        $data = '';
        if ($request->ajax()) {
            foreach ($products as $product) {
                $data.='<li>'.'Name:'.' <strong>'.$product->product_name.'</strong><br> Product_name: '.$product->product_name.'</li>';
            }
            return $data;
        }

       
        return view('loadmore/index',compact('products'));
    }
}
