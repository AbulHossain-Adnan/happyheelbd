<?php

namespace App\Http\Controllers\Admin\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class Productviewcontroller extends Controller
{
    public function productview($id)
    {
        $product = Product::find($id)->with('brand', 'category')->where('status', 1)->where('id', $id)->first();
        $color = $product->product_color;
        $quantity = $product->product_quantity;
        $size = $product->product_size;
        $product_color = explode(',', $color);
        $product_size = explode(',', $size);
        return response()->json(array(
            'product' => $product,
            'color' => $product_color,
            'size' => $product_size,

        ));
    }
}
