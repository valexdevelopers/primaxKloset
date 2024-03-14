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
        Schema::create('products', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->integer('unique_id');
            $table->ulid('admin_id');
            $table->string('product_brand')->nullable();
            $table->string('product_name');
            $table->longtext('product_description')->nullable();
            $table->integer('product_price');
            $table->integer('product_discount_price')->nullable();
            $table->ulid('promo_id')->nullable();
            $table->integer('quantity');
            $table->string('product_image_1');
            $table->string('product_image_2')->nullable();
            $table->string('product_image_3')->nullable();
            $table->string('product_image_4')->nullable();
            $table->string('product_image_5')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('promo_id')
                ->references('id')
                ->on('promos')
                ->onDelete('set null');
            $table->foreign('admin_id')
                ->references('id')
                ->on('admins')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
