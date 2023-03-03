<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Order;
use App\Models\User;
use App\Models\Admin;
use App\Models\Admin\Category;
use App\Models\Admin\Brand;
use App\Models\Product;
use DB;




class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    //
    public function index()
    {

       $date=date('y-m-d');
        $date_sum=Order::where('status',3)->where('date',$date)->sum('paying_amount');
       $month=date('F');
       $month_sum=Order::where('status',3)->where('month',$month)->sum('paying_amount');
       $year=$year=Carbon::now()->year;
       $year_sum=Order::where('status',3)->where('year',$year)->sum('paying_amount');
       // $products=DB::table('products')
       //                  ->join('categories','products.category_id','categories.id')
       //                  ->join('brands','products.brand_id','brands.id')  
       //                  ->select('products.*','categories.category_name','brands.brand_name')->get();

                       $products =  Product::with(['category','subCategory','files'])->get();






       $total_users=User::all();
       $total_admins=Admin::all();
       $total_products=Product::all();
       $total_categories=Category::all();
       $total_brands=Brand::all();









        return view('admin.home',compact('month_sum','date_sum','year_sum','total_users','total_admins','total_products','total_categories','total_brands','products'));
    }





    public function logout()
    {
        Auth::logout();
        $data = [
            'message'    => 'Admin Logout Successfully !',
            'alert-type' => 'success'
        ];
        return redirect()->route('admin.login')->with($data);
    }
}
