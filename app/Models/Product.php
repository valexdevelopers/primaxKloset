<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use App\Models;

class Product extends Model
{
    use HasFactory, HasUlids;
    protected $table = 'products';
    
    /**
     * fillable - mass assignable attributes
     *
     * @var array
     */
    protected $fillable = [
        'unique_id',
        'admin_id',
        'product_brand',
        'product_name',
        'product_description',
        'product_price',
        'product_discount_price',
        'promo_id',
        'quantity',
        'product_image_1',
        'product_image_2',
        'product_image_3',
        'product_image_4',
        'product_image_5',
        
        
    ];

    // relationships


    public function admins(){
        return $this->belongsTo(Models\Admin::class, 'admin_id');
    }
    
    /**
     * The roles that belong to the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_products', 'product_id', 'category_id');
    }


    public function variations(){
        return $this->hasMany(ProductVariation::class, 'product_id');
    }
    // public function productInventory(){
    //     return $this->hasOne(Models\Inventory::class, 'product_id');
    // }

    // public function productDetails(){
    //     return $this->hasOne(Models\PrductDetails::class, 'product_id');
    // }

    // public function productDetails(){
    //     return $this->hasOne(Models\PrductDetails::class, 'product_id');
    // }
}
