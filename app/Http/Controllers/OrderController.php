<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Shipping;
use App\Models\Product;
use App\Models\User;


use Cart;
use DB;


class OrderController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/order/index', [
            'orders' => Order::where('status', 0)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        $orders = Order::find($id)->where('id', $id)->OrderBY('id', 'desc')->with('Shipping')->first();

        $order_details = Order_detail::where('order_id', $id)->with('product')->get();
        // $user = User::findOrFail($orders->user_id)->first();
        // return view('admin/order/show',compact('orders','order_details','user'));
        return view('admin/order/show',compact('orders','order_details'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function acceptpayment()
    {
        return view('admin/order/index', [
            'orders' => Order::where('status', 1)->get(),
        ]);
    }

    public function progress()
    {
        return view('admin/order/index', [
            'orders' => Order::where('status', 2)->get(),
        ]);
    }

    public function delivarysuccess()
    {
        return view('admin/order/index', [
            'orders' => Order::where('status', 3)->get(),
        ]);
    }
    public function cancel()
    {
        return view('admin/order/index', [
            'orders' => Order::where('status', 5)->get(),
        ]);
    }




    // status update

    public function paymentaccept($order_id)
    {
        DB::table('orders')->where('id', $order_id)->update(['status' => 1]);
        return redirect()->route('accept.payment')->with('message', 'updated');
    }

    public function ordercancel($order_id)
    {
        DB::table('orders')->where('id', $order_id)->update(['status' => 5]);
        return redirect()->route('order.cancel')->with('message', 'updated');
    }
    public function orderprogress($order_id)
    {
        DB::table('orders')->where('id', $order_id)->update(['status' => 2]);
        return redirect()->route('order.progress')->with('message', 'updated');
    }
    public function orderdelivarysuccess($order_id)
    {
        DB::table('orders')->where('id', $order_id)->update(['status' => 3]);

        $order_details = Order_detail::where('order_id', $order_id)->get();


        foreach ($order_details as $item) {
            $products = Product::where('id', $item->product_id)->first();
            $mainqty = $products->product_quantity;
            $order_qty = $item->quantity;
            $newqty = $mainqty - $order_qty;
            Product::where('id', $item->product_id)->update(['product_quantity' => $newqty]);
        }

        return redirect()->route('delivary.success')->with('message', 'updated');
    }

    public function ordertracking(request $request)
    {

        $code = $request->status_code;
        $check = Order::where('status_code', $code)->first();

        if ($check) {
            return view('pages/order_tracking', compact('check'));
        } else {
            $notification = array('message' => 'invlid status code', 'alert-type' => 'error');
            return back()->with($notification);


        }



    }
    public function orderreturn($order_id)
    {
        dd($order_id);
        die();
        Order::find($order_id)->where('status', 3)->update(['return' => 1]);
        echo "done";
    }



}