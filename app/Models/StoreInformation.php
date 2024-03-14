<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreInformation extends Model
{
    use HasFactory;
    protected $table = 'store_information';

    protected $fillable = [
        'business_logo',
        'business_name',
        'business_description',
        'business_tagline',
        'business_sector',
        'business_keywords',
        'business_instagram',
        'business_facebook',
        'business_tiktok',
        'business_currency',
        'business_address',
        'business_city',
        'business_state',
        'business_country',
        'business_postal',
        'banner',
    ];

}
