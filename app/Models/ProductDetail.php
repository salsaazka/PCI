<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ProductDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'title',
        'size_min',
        'size_max',
        'packing',
        'measurement',
        'container',
        'size',
        'bag'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
