<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Order_detail extends Model
{
    use HasFactory;
     public function product()
    {
        return $this->belongsTo(product::class);
    }
}
