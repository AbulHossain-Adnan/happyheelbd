<?php

namespace App\Http\Controllers\Admin\Stock;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Admin\Category;
use App\Models\Admin\Brand;
use App\Models\Admin\Seo;
use App\Models\Admin\Site;
use App\Models\Sub_category;
use DB;
use DataTables;


class StockController extends Controller
{

public function __construct(){
	$this->middleware('auth:admin');
}



      public function stock(Request $request){
       

                       


                        if ($request->ajax()) {

                          $brands=Brand::all();
                          $products = DB::table('products')
                                          ->join('categories','products.category_id','categories.id')
                                          ->join('brands','products.brand_id','brands.id')  
                                          ->select('products.*','categories.category_name','brands.brand_name');
              
                          return Datatables::of($products)
              
                                  ->addIndexColumn()
              
                                  ->addColumn('action', function($row){
              
                    
              
                                   $btn = '
                                   <a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>
                                   <a href="javascript:void(0)" class="edit btn btn-info btn-sm">View</a>
                                   <a href="javascript:void(0)" class="edit btn btn-warning btn-sm">View</a>
              
              
                                   ';
              
                    
              
                                          return $btn;
              
                                  })
              
                                  ->rawColumns(['action'])
              
                                  ->make(true);
              
                      }
              
                        
                      // return view('admin/division/index');






                 

        return view('admin/stock/index');
        
    }
}
