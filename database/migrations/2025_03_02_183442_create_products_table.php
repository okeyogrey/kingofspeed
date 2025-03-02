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
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->text('description');
        $table->decimal('price', 10, 2);
        $table->unsignedInteger('stock');
        $table->decimal('discount', 5, 2)->nullable(); // % discount
        $table->unsignedBigInteger('category_id');
        $table->unsignedBigInteger('brand_id')->nullable();
        $table->string('image')->nullable();
        $table->timestamps();

        $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        $table->foreign('brand_id')->references('id')->on('brands')->onDelete('set null');
    });
}

};
