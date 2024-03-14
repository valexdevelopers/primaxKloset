<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes, HasUlids;

    protected $table = 'categories';

        
    /**
     * fillable - mass assignable attributes
     *
     * @var array<string, string>
     */
    protected  $fillable = [
        'unique_id',
        'collection_name',
        'collection_image',
    ];

    public function products(){
        
        return $this->belongsToMany(Product::class, 'category_products', 'category_id', 'product_id' );
        
    }
}
