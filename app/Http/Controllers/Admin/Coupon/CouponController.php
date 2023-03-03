<?php

namespace App\Http\Controllers\Admin\Coupon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon;
use App\Models\Admin\Category;
use Cart;
use Session;


class CouponController extends Controller
{
    public function index(){
        $data=Coupon::OrderBy('id','DESC')->get();
        return response()->json($data);
    }
    
    public function create(){
        return view('admin/coupon/index',[
            'coupons'=>Coupon::all()
        ]);
    }
    public function store(request $request){

        $data = new coupon();
        $data->coupon=$request->input('coupon_name');
        $data->discount=$request->input('coupon_discount');
        $data->coupon_started=$request->input('coupon_start');
        $data->coupon_end=$request->input('coupon_end');
        $data->status=0;

        $data->save();
        return response()->json(['success'=>'sdfsd']);
    }
    public function edit($id){


        $data=Coupon::findOrFail($id);
        return response()->json($data);


    }
    public function update(request $request,$id){
      
        $coupon_id=Coupon::findOrFail($id);
        $coupon_id->update([
            'coupon'=>$request->coupon,
            'discount'=>$request->discount,
            'coupon_started'=>$request->coupon_start,
            'coupon_end'=>$request->coupon_end,
        ]);
       return response()->json(['success'=>'sdfsd']);
    }
    public function destroy($id){

        Coupon::findOrFail($id)->delete();
        return response()->json(['success'=>'success']);
       

    }
    public function coupon(request $request){
      
       
         $coupon=$request->coupon_name;
        $check=Coupon::where('coupon',$coupon)->first();
       

      if($check){
     
        session::put('coupon',[
            'name'=>$check->coupon,
            'discount'=>$check->discount,
            'balance'=>Cart::subtotal()-$check->discount,


            ]);
        return back()->with('message','coupon apply succefully');


      }
        else{
            return back()->with('message','invalid coupon');
        }

    }








    //   public function cartremove($rowId){
    //     Cart::remove($rowId);
       
       
           
    //        return back()->with('message','cart remove succefully');
        

    // }
}
