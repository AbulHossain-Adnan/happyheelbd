<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ProductReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index($id)
    {

        if (session()->has('product_id')) {
            session()->forget('product_id');
        } else {
            session()->put('product_id', $id);
        }
        return view('user.review');
    }

    public function store(Request $request)
    {



        $request->validate([
            'rating' => 'required',
            'comment' => 'required',
        ]);

        if (session()->has('product_id')) {
            $product_id = session()->get('product_id');
        }


        ProductReview::create(
            [
                'user_id' => Auth::id(),
                'product_id' => $product_id,
                'comment' => $request->comment,
                'rating' => $request->rating,
                'status' => 'approve'
            ]

        );

        $request->session()->forget('product_id');

        $notification = array('message' => 'Review Success', 'alert-type' => 'success');

        return back()->with($notification);
    }
}
