<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'category_id',
        'title',
        'desc',
        'price',
        'unit',
        'stock',
        'image_1',
        'image_2',
        'image_3',
        'image_4',
    ];
}
