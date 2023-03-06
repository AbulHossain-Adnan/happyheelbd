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
    public function index()
    {
        return view('frontend/index', [
            // 'seos' => Seo::first(),
            // 'brands' => Brand::get(),

            // 'categories' => Category::OrderBy('id', 'desc')->limit(11)->get(),
            // 'products' => Product::with('files')->paginate(4)->get(),
            // 'brands' => Brand::all(),
            // 'main_sliders' => Product::where('status', 1)->where('main_slider', 1)->orderBy('id', 'desc')->get(),
            'tends' => Product::where('status', 1)->where('trend', 1)->with(['brand','files'])->orderBy('id', 'desc')->select('id', 'product_name', 'product_code', 'product_quantity', 'product_details', 'product_color','product_size','selling_price','discount_price')->get(),
            'best_rateds' => Product::where('status', 1)->where('best_rated', 1)->with(['brand','files'])->orderBy('id', 'desc')->select('id', 'product_name', 'product_code', 'product_quantity', 'product_details', 'product_color','product_size','selling_price','discount_price')->get(),
            // 'banner' => Product::where('status', 1)->where('mid_slider', 1)->first(),
            // 'site_setting' => Site::first(),
            'hot_deals' => Product::where('status', 1)->where('hot_deal', 1)->with(['brand','files'])->select('id', 'product_name', 'product_code', 'product_quantity', 'product_details', 'product_color','product_size','selling_price','discount_price')->get(),
            'all_products' => Product::where('status', 1)->with('category')->select('id', 'product_name', 'product_code', 'product_quantity', 'product_details', 'product_color','product_size','selling_price','discount_price')->paginate(12),
        ]);
    }


        
   
        
}