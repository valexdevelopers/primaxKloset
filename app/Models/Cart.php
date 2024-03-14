<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use App\Models;

class Cart extends Model
{
    use HasFactory, HasUlids;
    protected $fillable = [
        'user_id ',
        'product_id',
        'session_id',
        'product_variation_id',
        'quantity',

       
    ];


    public function variations(){
        return $this->belongsTo(Models\ProductVariation::class, 'product_variation_id');
    }

    public function products(){
        return $this->belongsTo(Models\Product::class, 'product_id');
    }
}
