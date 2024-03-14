<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class ProductVariation extends Model
{
    use HasFactory, HasUlids;

    protected $table = 'product_variations';

    // mass assignable properties
    
    protected $fillable = [
        'unique_id',
        'product_id',
        'product_price',
        'product_discount_price',
        'promo_id',
        'quantity',
        'product_color',
        'product_size',
        'product_weigth',
        'product_dimension',
        
        
    ];
}
