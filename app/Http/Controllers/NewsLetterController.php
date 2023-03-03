<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Newsletter;
use Illuminate\Support\Facades\Validator;

class NewsLetterController extends Controller
{
	

    public function addnewsletter(Request $request){

    	 $validator = Validator::make($request->all(), [
            'newsletter' => 'required|email',
           
        ]);
 if ($validator->fails()) {
            return \Response()->json(['error'=>'enter valid email']);
        }


$check=Newsletter::where('email',$request->newsletter)->first();



if(Auth::check()){

	if($check){
  return \Response()->json(['error'=>'You already subcrived']);
	}
Newsletter::insert(['user_id'=>Auth::id(),'email'=>$request->newsletter]);
  return \Response()->json(['success'=>'Thank you for Subscribe']);
}
else{
	  return \Response()->json(['error'=>'you are not loged in']);
}









}



}
    	

 

