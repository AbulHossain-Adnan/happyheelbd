<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order_detail;
use App\Models\Shipping;




class Order extends Model
{
    use HasFactory;
    protected $fillable=['status','return'];

     public function order_detail()
    {
        return $this->hasMany(order_detail::class);
    }
     public function shipping()
    {
        return $this->hasOne(shipping::class);
    }
    
}
