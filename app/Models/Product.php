<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Brand;
use App\Models\Admin\Category;
use App\Models\Sub_category;

use App\Models\Product;


class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // protected $fillable = ['product_name', 'category_id', 'brand_id', 'product_code', 'product_quantity', 'product_details', 'product_color', 'product_size', 'selling_price', 'discount_price', 'main_slider', 'hot_deal', 'best_rated', 'mid_slider', 'hot_new', 'trend', 'byeonegetone', 'image_one', 'image_two', 'image_three', 'status'];
    public function brand()
    {
        return $this->belongsTo(brand::class);
    }
    public function category()
    {
        return $this->belongsTo(category::class);
    }
    public function subCategory()
    {
        return $this->belongsTo(Sub_category::class, 'subcategory_id');
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }
    public function reviews()
    {
        return $this->hasMany(ProductReview::class);
    }
     public function attributes()
    {
        return $this->hasMany(ProductAttribute::class,'product_id');
    }
    
}