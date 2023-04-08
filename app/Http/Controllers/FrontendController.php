<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Brand;
use App\Models\Product;


class FrontendController extends Controller
{
    public function index(Request $request){ 

        $all_products = Product::where('status', 1)->with('attributes')
        ->select('id', 'product_name', 'product_code', 'product_quantity', 'product_details','product_size','selling_price','discount_price')
        ->orderBy('id','desc')->paginate(12);
    
        $eid_collections = Product::where('status', 1)->where('trend', 1)
        ->with('attributes') //trend products use as eid collection
        ->orderBy('id', 'desc')->select('id', 'product_name', 'product_code',
         'product_quantity', 'product_details','product_size','selling_price','discount_price')->get();

        $best_serllers = Product::where('status', 1)->where('best_rated', 1)->with('attributes')
        ->orderBy('id', 'desc') //best reated use as best seller
        ->select('id', 'product_name', 'product_code', 'product_quantity',
         'product_details','product_size','selling_price','discount_price')->paginate(4);


         $block_heels = Product::where('status', 1)->where('brand_id', 1)->with('attributes')
        ->orderBy('id', 'desc') //brand_id 1 use as best seller
        ->select('id', 'product_name', 'product_code', 'product_quantity',
         'product_details','product_size','selling_price','discount_price')->paginate(4);

         $pencil_heels = Product::where('status', 1)->where('brand_id', 2)->with('attributes')
        ->orderBy('id', 'desc') //brand_id 2 use as best seller
        ->select('id', 'product_name', 'product_code', 'product_quantity',
         'product_details','product_size','selling_price','discount_price')->paginate(4);
         
        $flat_sandles = Product::where('status', 1)->where('brand_id', 3)->with('attributes')
        ->orderBy('id', 'desc') //brand_id 3 use as best seller
        ->select('id', 'product_name', 'product_code', 'product_quantity',
         'product_details','product_size','selling_price','discount_price')->paginate(4);

        $transparent_heels = Product::where('status', 1)->where('brand_id', 4)->with('attributes')
        ->orderBy('id', 'desc') //brand_id 4 use as best seller
        ->select('id', 'product_name', 'product_code', 'product_quantity',
        'product_details','product_size','selling_price','discount_price')->paginate(4);
        $balance_heels = Product::where('status', 1)->where('brand_id', 5)->with('attributes')
        ->orderBy('id', 'desc') //brand_id 4 use as best seller
        ->select('id', 'product_name', 'product_code', 'product_quantity',
        'product_details','product_size','selling_price','discount_price')->paginate(4);
         
        $category_products = Brand::get(); //brand model use as category for sorting products

        return view('frontend/index', compact('eid_collections','best_serllers','block_heels','pencil_heels','flat_sandles','flat_sandles', 'transparent_heels', 'category_products','all_products','balance_heels'));
    }


        
   
        
}