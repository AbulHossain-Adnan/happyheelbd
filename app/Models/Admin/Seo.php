<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    use HasFactory;

    protected $fillable=['meta_title','meta_author','meta_tag','meta_description','google_analytics','bing_analyticst'];
}
