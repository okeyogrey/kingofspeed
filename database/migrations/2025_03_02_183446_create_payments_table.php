<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('payments', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('order_id');
        $table->string('payment_method'); // Paystack, PayPal
        $table->string('transaction_id')->unique();
        $table->decimal('amount', 10, 2);
        $table->string('status')->default('pending');
        $table->timestamps();

        $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
    });
}

};
