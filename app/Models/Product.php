<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\ProductDetail;

class Product extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'category_id',
        'title',
        'title_en',
        'desc',
        'desc_en',
        'price',
        'unit',
        'stock',
        'image_1',
        'image_2',
        'image_3',
        'image_4',
        'min_order',
        'marketplace_url',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function productDetail()
    {
        return $this->hasMany(ProductDetail::class);
    }
}
