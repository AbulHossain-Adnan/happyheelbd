<?php

   

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;
use Cart;
use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Shipping;
use App\Models\Admin\Division;
use App\Models\Admin\District;
use App\Models\Admin\Area;

use Carbon\Carbon;
use Auth;


   

class StripePaymentController extends Controller

{
     

    /**

     * success response method.

     *

     * @return \Illuminate\Http\Response

     */

    public function stripe()

    {

        return view('stripe');

    }


    /**

     * success response method.

     *

     * @return \Illuminate\Http\Response

     */

    public function stripePost(Request $request)

    {
       

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create ([

                "amount" => $request->subtotal * 100,

                "currency" => "BDT",

                "source" => $request->stripeToken,

                "description" => "Test payment from itsolutionstuff.com." 

        ]);

     
           $order_id= Order::insertGetId([
                'user_id'=>Auth::id(),
                'payment_type'=>$request->payment,
                'blnc_transection'=>$request->stripeToken,
                'subtotal'=>Cart::subtotal(),  
                'discount'=>$request->discount,          
                'paying_amount'=>$request->subtotal,
                'status_code'=>mt_rand(100000,999999),
                'shipping'=>0,
                'vat'=>0,
                'date'=>Carbon::now(),
                'month'=>Carbon::now()->format('F'),
                'year'=>Carbon::now()->year,
            ]);
            foreach (Cart::content() as $value) {
            
            Order_detail::insert([
                'user_id'=>Auth::id(),
                'product_id'=>$value->id,
                'order_id'=>$order_id,

                'color'=>$value->options->color,
                'size'=>$value->options->size,
                'quantity'=>$value->qty,
                'price'=>$value->price,
                'subtotal'=>$value->price*$value->qty,
                'shipping'=>50,
                'vat'=>50,
                
            ]);
}
      
      $division_id=$request->division;
$district_id=$request->district;
$area_id=$request->area;

$division_name=Division::find($division_id);
$district_name=District::find($district_id);
$area_name=Area::find($area_id);


    Shipping::insert([

        'user_id'=>Auth::id(),
        'order_id'=>$order_id,
        'division'=>$division_name->division,
        'district'=>$district_name->district,
        'area'=>$area_name->area,
        'zip'=>$request->zip,
        'address'=>$request->adress,

        ]); 

           
Cart::destroy();
       
        return redirect('/')->with('message',"Your Payment Successfully Done");

    }

}