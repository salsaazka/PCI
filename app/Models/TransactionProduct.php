<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class TransactionProduct extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'product_id',
        'count'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
