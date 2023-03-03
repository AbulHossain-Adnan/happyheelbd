<?php
namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Coupon;
use App\Models\Admin\Seo;
use App\Models\Admin\Site;
use Cart;
use Session;
use App\Models\Admin\Category;

class CartController extends Controller
{

    public function addcart($id)
    {

dd($id);


        if (session::has('coupon')) {
            session::forget('coupon');
        }

        $product = Product::find($id)->where('id', $id)->first();
        $data = array();
        if ($product->discount_price == null) {

            $data['id'] = $product->id;
            $data['name'] = $product->product_name;
            $data['qty'] = 1;
            $data['price'] = $product->selling_price;
            $data['weight'] = 1;
            $data['options']['image'] = $product->image_one;
            $data['options']['color'] = '';
            $data['options']['size'] = '';
            cart::add($data);
            // return Response()->json(['success' => 'product added succefully']);
        } else {
            $data['id'] = $product->id;
            $data['name'] = $product->product_name;
            $data['qty'] = 1;
            $data['price'] = $product->discount_price;
            $data['weight'] = 1;
            $data['options']['image'] = $product->image_one;
            $data['options']['color'] = '';
            $data['options']['size'] = '';
            cart::add($data);
            // return Response()->json(['success' => 'product added succefully']);

        }
    }
    public function cart_show()
    {
        $seos = Seo::first();
        $cart = Cart::content();
        $categories = Category::all();
        $site_setting = Site::first();

        return view('pages/cart', compact('cart', 'categories', 'seos', 'site_setting'));

    }
    public function addtocart(Request $request)
    {
        if (session::has('coupon')) {
            session::forget('coupon');
        }
        $id = $request->product_id;
        $product = Product::with('files')->find($id)->where('id', $id)->first();
        $quantity = $request->quantity;
        $color = $request->color;
        $size = $request->size;
        $data = array();
        if ($product->discount_price == null) {

            $data['id'] = $product->id;
            $data['name'] = $product->product_name;
            $data['qty'] = $quantity;
            $data['price'] = $product->selling_price;
            $data['weight'] = 1;
            $data['options']['image'] = $product->files[0]['product_image'];
            $data['options']['color'] = $request->color;
            $data['options']['size'] = $request->size;
            cart::add($data);

            return Response()->json(['success' => 'Data Added to Cart Succesfully']);

        } else {
            $data['id'] = $product->id;
            $data['name'] = $product->product_name;
            $data['qty'] = $quantity;
            $data['price'] = $product->discount_price;
            $data['weight'] = 1;
            $data['options']['image'] = $product->files[0]['product_image'];
            $data['options']['color'] = $request->color;
            $data['options']['size'] = $request->size;
            cart::add($data);

            return Response()->json(['success' => 'Data Added to Cart Succesfully']);


        }

    }
    public function couponcartremove($rowId)
    {
        if (session::has('coupon')) {
            session::forget('coupon');
        }

        Cart::remove($rowId);
        return back();
    }
    public function appcoupon(Request $request)
    {
        $coupon_name = $request->coupon_name;
        $check = Coupon::where('coupon', $coupon_name)->first();

        if ($check) {
            $data1 = $check->coupon;
            $data2 = Cart::subtotal();
            $data3 = Cart::subtotal() * $check->discount / 100;
            $data4 = $check->discount;
            $data5 = Cart::subtotal() - Cart::subtotal() * $check->discount / 100;
            Session::put('coupon', [
                'name' => $check->coupon,
                'subtotal' => Cart::subtotal(),
                'discount_amount' => Cart::subtotal() * $check->discount / 100,
                'discount' => $check->discount,
                'grand_total' => Cart::subtotal() - Cart::subtotal() * $check->discount / 100,
            ]);
            return Response()->json(['success' => 'coupon added succefully', $data1, $data2, $data3, $data4, $data5]);


        } else {

            return Response()->json(['error' => 'invalid coupon']);
        }

    }

    public function alldata()
    {
        $data = Cart::content();
        return Response()->json($data);
    }
    public function increment($rowId)
    {
        $row = Cart::get($rowId);
        Cart::update($rowId, $row->qty + 1);
        if (session::has('coupon')) {
            $coupon_name = session::get('coupon')['name'];
            $check = Coupon::where('coupon', $coupon_name)->first();
            session::put('coupon', [
                'name' => $check->coupon,
                'subtotal' => Cart::subtotal(),
                'discount_amount' => Cart::subtotal() * $check->discount / 100,
                'discount' => $check->discount,
                'grand_total' => Cart::subtotal() - Cart::subtotal() * $check->discount / 100,
            ]);
            return Response()->json('succefully');
        }
    }
    public function decrement($rowId)
    {
        $row = Cart::get($rowId);
        Cart::update($rowId, $row->qty - 1);
        if (session::has('coupon')) {
            $coupon_name = session::get('coupon')['name'];
            $check = Coupon::where('coupon', $coupon_name)->first();
            session::put('coupon', [
                'name' => $check->coupon,
                'subtotal' => Cart::subtotal(),
                'discount_amount' => Cart::subtotal() * $check->discount / 100,
                'discount' => $check->discount,
                'grand_total' => Cart::subtotal() - Cart::subtotal() * $check->discount / 100,
            ]);

        }
        return Response()->json('succefully');

    }
    public function destroy($rowId)
    {
        Cart::remove($rowId);
        if (session::has('coupon')) {
            session::forget('coupon');
        }
        return Response()->json($rowId);
    }
    public function couponremove()
    {
        if (session::has('coupon')) {
            session::forget('coupon');
        }
        return Response()->json(['success' => 'coupon remove succefully']);
    }
    public function minicart()
    {
        return Response()->json(
            array(
                'subtotal' => Cart::subtotal(),
                'cart_count' => Cart::count(),
            )
        );
    }
    public function cartcal()
    {
        if (session::has('coupon')) {
            $coupon_name = session::get('coupon')['name'];
            $check = Coupon::where('coupon', $coupon_name)->first();


            return Response()->json(
                array(
                    'name' => $check->coupon,
                    'subtotal' => Cart::subtotal(),
                    'discount_amount' => Cart::subtotal() * $check->discount / 100,
                    'discount' => $check->discount,
                    'grand_total' => Cart::subtotal() - Cart::subtotal() * $check->discount / 100,
                )
            );
        } else {
            return Response()->json(
                array(
                    'total' => Cart::subtotal(),
                )
            );
        }
    }

}