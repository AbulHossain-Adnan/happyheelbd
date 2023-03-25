<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Admin\Category;
use App\Models\File;
use App\Models\Admin\Seo;
use App\Models\Admin\Site;
use App\Models\Sub_category;



class LoadMoreController extends Controller
{
    public function loadmore(Request $request)  {
        
         $categories = Category::select(['id', 'category_name'])->get();
      

        return view('loadmore/index', compact('categories'));
    }  
    
    public function loadMorePost(Request $request) {
dd($request->file('file'));
    }
}
