<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Admin\Category;
use App\Models\Admin\Brand;
use App\Models\Admin\Seo;
use App\Models\Admin\Site;

class SearchController extends Controller
{
	//       public function search(request $request){


	// return view('pages/search_product',[
// 		'categories'=>Category::all(),
//         'brands'=>Brand::all(),
//         'seos'=>Seo::first(),
//         'site_setting'=>Site::first(),
//         'products'=>Product::where("product_name","LIKE","%".$request->search."%")
// 					->orwhere("product_code","LIKE","%".$request->search."%")
// 					->orwhere("product_details","LIKE","%".$request->search."%")
// 					->orwhere("product_color","LIKE","%".$request->search."%")->get(),


	// 		]);
//   }

	public function search(request $request)
	{

		if(Request()->get('sort') == "price_asc"){
			$products = Product::where('status',1)->orderBy('discount_price','asc')->paginate(2);

		}
		elseif(Request()->get('sort') == "price_dsc"){
			$products = Product::where('status',1)->orderBy('discount_price','desc')->paginate(2);
		}
		elseif(Request()->get('sort') == "newest"){
			$products = Product::where('status',1)->orderBy('created_at','desc')->paginate(2);
		}
		else{
			$products = Product::where('status',1)->paginate(2);
		}



// $product = Product::where('status',1)->get();
// $color=$product->product_color;
   
//     $size=$product->product_size;
//     $product_color=explode(',',$color);
//     $product_size=explode(',',$size);

// dd($product_color);



		
		// return view('pages/search_product',compact('products'));
	}

	public function findproduct(request $request)
	{


		$products = Product::where("product_name", "LIKE", "%" . $request->search . "%")
			->orwhere("product_code", "LIKE", "%" . $request->search . "%")
			->orwhere("product_details", "LIKE", "%" . $request->search . "%")
			->orwhere("product_color", "LIKE", "%" . $request->search . "%")->take(10);

		return view('pages/product_suggetion', compact('products'));


	}
}