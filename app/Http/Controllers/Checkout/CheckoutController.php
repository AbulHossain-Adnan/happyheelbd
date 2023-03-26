<?php

namespace App\Http\Controllers\Checkout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cart;
use App\Models\Admin\Category;
use App\Models\Admin\Division;
use App\Models\Admin\District;
use App\Models\Admin\Site;
use App\Models\Admin\Area;
use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Shipping;
use App\Models\User;

use App\Models\Admin\Seo;
use Auth;
use Carbon\Carbon;



class CheckoutController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function checkoutpage(Request $Request)
    {

        return view(
            'pages/checkout',
            [
                'seos' => Seo::first(),
                'cart' => Cart::content(),
                'categories' => Category::get(),
                'carts' => $Request->all(),
                'divisions' => Division::get(),
                // 'site_setting' => Site::first(),
            ]
        );
    }

    public function payment(Request $Request)
    {
        $payAmount = $Request->subtotal + $Request->sheeping;
        $subtotal = $Request->subtotal;

        if ($Request->payment == "cash_on") {
            $order_id = Order::insertGetId([
                'user_id' => Auth::id() ? Auth::id() : "",
                // 'name'=>$Request->name,
                'payment_type' => $Request->payment,
                'blnc_transection' => $Request->pnumber,
                'subtotal' => $subtotal,
                'discount' => $Request->discount,
                'paying_amount' => $payAmount,
                'status_code' => mt_rand(100000, 999999),
                'shipping' => $Request->sheeping,
                'vat' => 0,
                'date' => Carbon::now()->format('Y-m-d'),
                'month' => Carbon::now()->format('F'),
                'year' => Carbon::now()->year,
            ]);
            foreach (Cart::content() as $value) {

                Order_detail::insert([
                    'user_id' => Auth::id() ? Auth::id() : "",
                    'order_id' => $order_id,
                    'product_id' => $value->id,
                    'color' => $value->options->color,
                    'size' => $value->options->size,
                    'quantity' => $value->qty,
                    'price' => $value->price,
                    'subtotal' => $value->price * $value->qty,
                    'shipping' => $Request->sheeping,
                    'vat' => 0,

                ]);
            }


            $division_id = $Request->division_id;
            $district_id = $Request->district_id;
            $area_id = $Request->area_id;

            $division_name = Division::find($division_id);
            $district_name = District::find($district_id);
            $area_name = Area::find($area_id);


            Shipping::insert([
                'user_id' => Auth::id() ? Auth::id() : "",
                'user_id' => $Request->name,
                'order_id' => $order_id,
                'division' => $division_name->division,
                'district' => $district_name->district,
                'area' => $area_name->area,
                'zip' => $Request->zip,
                'address' => $Request->adress,
            ]);

            Cart::destroy();
            return redirect('/')->with('message', "Your Order Successfully Done");
        }

        // elseif ($Request->payment == "bkash") {
        //     $order_id = Order::insertGetId([
        //         'user_id' => Auth::id(),
        //         'payment_type' => $Request->payment,
        //         'blnc_transection' => $Request->stripeToken,
        //         'paying_amount' => $Request->subtotal,
        //         'subtotal' => Cart::subtotal(),
        //         'status_code' => mt_rand(100000, 999999),
        //         'shipping' => 0,
        //         'vat' => 0,
        //         'date' => Carbon::now()->format('m-d-y'),
        //         'month' => Carbon::now()->format('F'),
        //         'year' => Carbon::now()->year,
        //     ]);
        //     foreach (Cart::content() as $value) {

        //         Order_detail::insert([
        //             'user_id' => Auth::id(),
        //             'product_id' => $value->id,
        //             'order_id' => $order_id,
        //             'color' => $value->options->color,
        //             'size' => $value->options->size,
        //             'quantity' => $value->qty,
        //             'price' => $value->price,
        //             'subtotal' => $value->price * $value->qty,
        //             'shipping' => 50,
        //             'vat' => 50,

        //         ]);
        //     }
        //     $division_id = $Request->division_id;
        //     $district_id = $Request->district_id;
        //     $area_id = $Request->area_id;
        //     $division_name = Division::find($division_id);
        //     $district_name = District::find($district_id);
        //     $area_name = Area::find($area_id);


        //     Shipping::insert([
        //         'user_id' => Auth::id(),
        //         'order_id' => $order_id,
        //         'division' => $division_name->division,
        //         'district' => $district_name->district,
        //         'area' => $area_name->area,
        //         'zip' => $Request->zip,
        //         'address' => $Request->adress,

        //     ]);
        //     Cart::destroy();

        //     return redirect('/')->with('message', "Your Payment Successfully Done");
        // } elseif ($Request->payment == "stripe") {
        //     return view('pages/stripe', [
        //         'categories' => Category::all(),
        //         'order_details' => $Request->all(),
        //         'seos' => Seo::first(),
        //         'site_setting' => Site::first(),
        //     ]);
        // } else {

        //     return back();
        // }
    }
}
