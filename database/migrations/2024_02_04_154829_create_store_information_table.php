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
        Schema::create('store_information', function (Blueprint $table) {
            $table->id();
            $table->string('business_logo');
            $table->string('business_name');
            $table->string('business_description')->nullable();
            $table->string('business_tagline')->nullable();
            $table->string('business_sector');
            $table->string('business_keywords')->nullable();
            $table->string('business_instagram')->nullable();
            $table->string('business_facebook')->nullable();
            $table->string('business_tiktok')->nullable();
            $table->string('business_currency');
            $table->string('business_address')->nullable();
            $table->string('business_city');
            $table->string('business_state');
            $table->string('business_country');
            $table->string('business_postal');
            $table->string('banner');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('store_information');
    }
};
