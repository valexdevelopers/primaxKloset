<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class CategoryProduct extends Model
{
    use HasFactory, HasUlids;

    protected $table ='category_products';

    protected $fillable = [
        'product_id',
        'category_id',
    ];
}
