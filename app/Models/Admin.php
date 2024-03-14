<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, SoftDeletes, HasUlids, Notifiable;

    protected $table = 'admins';

    protected $guard = 'admin';


    /**
     * 
     * Mass assignable attributes
     * 
     * @var array<int, string>
     * 
     */

    protected $fillable = [
        'unique_id',
        'firstname',
        'lastname',
        'email',
        'phone',
        'password',
        'admin_verified_at',

    ];


    /**
     * Attributes hidden from serialization
     * 
     * @var array<int, string>
     * 
     */
    protected $hidden = [
        'password',
        'remember_token'
    ];


    /**
     * attributes that should be cast
     * 
     * @var array<string, string>
     * 
     */
    protected $cast = [
        'admin_verified_at' => 'datetime',
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function isSuperAdmin(){
        return $this->isSuperAdmin == 1;
    }

    public function products(){
        return $this->hasMany(Product::class, 'admin_id');
    }
}
