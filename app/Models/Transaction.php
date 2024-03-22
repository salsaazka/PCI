<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'user_id',
        'payment_id',
        'transaction_product_id',
        'total_price',
        'total_count',
        'proof_payment'
    ];
}
