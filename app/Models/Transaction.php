<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Payment;
use App\Models\TransactionProduct;


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
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
    public function transProduct()
    {
        return $this->belongsTo(TransactionProduct::class);
    }
}
