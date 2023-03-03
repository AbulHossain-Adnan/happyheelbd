<?php

namespace App\Http\Controllers\Admin\Status;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class StatusController extends Controller
{
  

    public function active($id){
      dd($id);
       $product = Product::find($id);

        if($product->status =='1'){
           $product->update([
            'status'=>'0'
           ]);
            
            
            $notification=array(
            'message'=>'status updated successfully',
            'alert-type'=>'success'

           );
           return back()->with($notification);
        }
      
    }
     public function deactive($id){
       
        $product = Product::find($id);

        if($product->status == '0'){
           
            
           $product->update([
            'status'=>'1'

           ]);
           $notification=array(
            'message'=>'status updated successfully',
            'alert-type'=>'success'

           );
           return back()->with($notification);

        }
        
        
    }
}
