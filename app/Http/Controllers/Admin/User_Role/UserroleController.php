<?php

namespace App\Http\Controllers\Admin\User_Role;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Models\Admin;

class UserroleController extends Controller
{
    
    public function index(){
            return view('admin/user_role/all_user');
    }
    
    public function create(){
    	$data=Admin::where('type',2)->OrderBy('id','DESC')->get();
        return response()->json($data);
    }



    
    public function store(Request $Request){
 
    	$data=array();
    	$data['name']= $Request->input('name');
    	$data['email']= $Request->input('email');
    	$data['password']=Hash::make($Request->input('password'));
    	$data['product']= $Request->input('product');
    	$data['category']= $Request->input('category');
    	$data['coupon']= $Request->input('coupon');
    	$data['division']= $Request->input('division');
    	$data['orders']= $Request->input('orders');
    	$data['seo']= $Request->input('seo');
    	$data['reports']= $Request->input('report');
    	$data['return_order']= $Request->input('return_order');
    	$data['contact_message']= $Request->input('contact_msg');
    	$data['product_comment']= $Request->input('product_comment');
    	$data['site_setting']= $Request->input('site_setting');
        $data['post']= $Request->input('post');
        $data['stock']= $Request->input('stock');
    	$data['type']=2;
    	DB::table('admins')->insert($data);
    	return response()->json(['success'=>'sdfsd']);
    }
    public function alluserroll(){

    	return view('admin/user_role/all_user',[

    		'users'=>Admin::where('type',2)->get(),
    	]);
    
    
}
public function edit($id){
	      $data=Admin::findOrFail($id);
          return response()->json($data);

	
}
public function userupdate(Request $Request ,$id){

	$data=Admin::find($id);
    	$data['name']= $Request->name;
    	$data['email']= $Request->email;
    	$data['password']=Hash::make($Request->password);
    	$data['product']= $Request->product;
    	$data['category']= $Request->category;
    	$data['coupon']= $Request->coupon;
    	$data['division']= $Request->division;
    	$data['orders']= $Request->orders;
    	$data['seo']= $Request->seo;
    	$data['reports']= $Request->report;
    	$data['return_order']= $Request->return_order;
    	$data['contact_message']= $Request->contact_msg;
    	$data['product_comment']= $Request->product_comment;
    	$data['site_setting']= $Request->site_setting;
        $data['post']= $Request->post;
        $data['stock']= $Request->stock;

    	$data['type']=2;
    	$data->update();

    	return redirect()->route('alluser.role')->with('message','admin chaild updated successfully');

}
public function destroy($id){

	Admin::find($id)->delete();
return response()->json(['success'=>'sdfsd']);

}
public function userroleupdated(Request $Request){

    $data_id=$Request->input('userid');
    $data=Admin::findOrFail($data_id);
            
        $data->name= $Request->input('name');
        $data->email= $Request->input('email');
        $data->password=Hash::make($Request->input('password'));
        $data->product= $Request->input('product');
        $data->category= $Request->input('category');
        $data->coupon= $Request->input('coupon');
        $data->division= $Request->input('division');
        $data->orders= $Request->input('orders');
        $data->seo= $Request->input('seo');
        $data->reports= $Request->input('report');
        $data->return_order= $Request->input('return_order');
        $data->contact_message= $Request->input('contact_msg');
        $data->product_comment= $Request->input('product_comment');
        $data->site_setting= $Request->input('site_setting');
        $data->post= $Request->input('post');
        $data->stock= $Request->input('stock');
        $data->type=2;
        $data->update();
        return response()->json(['success'=>'sdfsd']);

}
}
