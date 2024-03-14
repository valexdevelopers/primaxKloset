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
        Schema::create('product_variations', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->integer('unique_id')->unique();
            $table->ulid('product_id');
            $table->integer('product_price');
            $table->integer('product_discount_price')->nullable();
            $table->ulid('promo_id')->nullable();
            $table->integer('quantity');
            $table->string('product_color')->nullable();
            $table->string('product_size')->nullable();
            $table->string('product_weigth')->nullable();
            $table->string('product_dimension')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onDelete('cascade');
            $table->foreign('promo_id')
                ->references('id')
                ->on('promos')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variations');
    }
};
