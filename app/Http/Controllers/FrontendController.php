<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Admin\Brand;
use App\Models\Product;
use App\Models\Admin\Seo;
use App\Models\Admin\Site;

class FrontendController extends Controller
{
    public function index(Request $request)
    {

        $all_products = Product::where('status', 1)->with(['category','productAttributes'])
        ->select('id', 'product_name', 'product_code', 'product_quantity', 'product_details','product_size',
        'selling_price','discount_price')->orderBy('id','desc')
        ->paginate(12);
        $tends = Product::where('status', 1)->where('trend', 1)
        ->with('productAttributes')
        ->orderBy('id', 'desc')->select('id', 'product_name', 'product_code',
         'product_quantity', 'product_details','product_size','selling_price','discount_price')->get();

        $best_rateds = Product::where('status', 1)->where('best_rated', 1)->with('productAttributes')
        ->orderBy('id', 'desc')->select('id', 'product_name', 'product_code', 'product_quantity',
         'product_details','product_size','selling_price','discount_price')->get();

       $hot_deals = Product::where('status', 1)->where('hot_deal', 1)->with('productAttributes')
       ->select('id', 'product_name', 'product_code', 'product_quantity', 'product_details','product_size','selling_price','discount_price')
       ->orderBy('id','desc')->get();

         if ($request->ajax()) {

            $list_view = view('partials.list_view',compact('all_products'))->render();
            return response()->json(['list_view'=>$list_view]);

         }

        return view('frontend/index', compact('all_products','tends','best_rateds','hot_deals'));
    }


        
   
        
}