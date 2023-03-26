<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'category_id' => 'required',
            // 'brand_id' => 'required',
            'product_name' => 'required|unique:products',
            'product_code' => 'required',
            'product_quantity' => 'required|numeric',
            'product_size' => 'required',
            'Product_color.*' => 'required',
            'selling_price' => 'required|integer',
            'discount_price' => 'required|integer',
            'product_details' => 'required',
            // 'image_one' => 'required|mimes:jpg,bmp,png,jpeg',
            // 'image_two' => 'required|mimes:jpg,bmp,png,jpeg',
            // 'image_three' => 'required|mimes:jpg,bmp,png,jpeg',
        ];
    }
}