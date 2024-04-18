<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->bigInteger('user_id')->nullable()->change();
            $table->bigInteger('payment_id')->nullable()->change();
            $table->bigInteger('transaction_product_id')->nullable()->change();
            $table->string('proof_payment')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->bigInteger('user_id')->nullable(false)->change();
            $table->bigInteger('payment_id')->nullable(false)->change();
            $table->bigInteger('transaction_product_id')->nullable(false)->change();
            $table->string('proof_payment')->nullable(false)->change();
        });
    }
};
