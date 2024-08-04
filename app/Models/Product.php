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
        'desc_highlight',
        'desc_highlight_en',
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
        'order',
        'image_desc_1',
        'image_desc_2',
        'image_desc_3',
        'image_desc_4',
        'image_desc_1_en',
        'image_desc_2_en',
        'image_desc_3_en',
        'image_desc_4_en'

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
