<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\District;
use App\Models\Admin\Area;
use App\Models\Product;
use App\Models\Admin\Category;
use App\Models\Admin\Brand;
use App\Models\Admin\Seo;
use App\Models\Admin\Site;
use Cart;


class UserController extends Controller
{
  public function getdistrict($division_id)
  {

    $data = District::where('division_id', $division_id)->get();

    return Response()->json($data);

  }
  public function getarea($district_id)
  {




$data['district'] = Area::where('district_id', $district_id)->get();

        if ($district_id == 8){
      
      $data['sheeping'] = 80;

      
      $data['total'] = Cart::subtotal()+80;

    }else{
     
         $data['sheeping'] = 150;
          $data['total'] = Cart::subtotal()+150;
        
    }
  

    return Response()->json($data);
  }

  public function singleproduct($id)
  {
    $product = Product::with(['category', 'brand','files'])->where('id', $id)->first();


    $product_color = explode(',', $product->product_color);
    $product_size = explode(',', $product->product_size);
    // $categories=Category::all();
    // $site_setting=Site::first();
    $releted_products = Product::where('category_id', $product->category_id)->get();


    return view('pages/single_product', compact('product', 'product_color', 'product_size','releted_products'));

  }

  public function categoryshow($id)
  {
    return view('pages/category_product', [
      'categories' => Category::all(),
      'brands' => Brand::all(),
      'seos' => Seo::first(),
      'site_setting' => Site::first(),
      'products' => Product::where('status', 1)->where('category_id', $id)->get(),

    ]);
  }



  public function productview($id)
  {
    
    $product = Product::find($id)->with('brand', 'category','files')->where('status', 1)->where('id', $id)->first();







    $color = $product->product_color;
    $quantity = $product->product_quantity;
    $size = $product->product_size;
    $product_color = explode(',', $color);
    $product_size = explode(',', $size);
    $product_image = $product->files[0]['product_image'];

    return response()->json(
      array(
        'product' => $product,
        'color' => $product_color,
        'size' => $product_size,
        'product_image' => $product_image

      )
    );

  }


  public function search(request $request)
  {


    return view('pages/search_product', [
      'categories' => Category::all(),
      'brands' => Brand::all(),
      'seos' => Seo::first(),
      'site_setting' => Site::first(),
      'products' => Product::where("product_name", "LIKE", "%" . $request->search . "%")
        ->orwhere("product_code", "LIKE", "%" . $request->search . "%")
        ->orwhere("product_details", "LIKE", "%" . $request->search . "%")
        ->orwhere("product_color", "LIKE", "%" . $request->search . "%")->paginate(12),


    ]);
  }

  public function findproduct(request $request)
  {


    $products = Product::where("product_name", "LIKE", "%" . $request->search . "%")
      ->orwhere("product_code", "LIKE", "%" . $request->search . "%")
      ->orwhere("product_details", "LIKE", "%" . $request->search . "%")
      ->orwhere("product_color", "LIKE", "%" . $request->search . "%")->limit(10)->get();

    return view('pages/product_suggetion', compact('products'));


  }

  public function quickview($id)
  {
    $product = Product::with('files')->where('status', 1)->where('id', $id)->first();


    $color = $product->product_color;
    $quantity = $product->product_quantity;
    $size = $product->product_size;
    $product_color = explode(',', $color);
    $product_size = explode(',', $size);
    return view('pages/quickview', compact('product', 'product_color', 'product_size'));
  }
}