<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'product_img',
        'first_name',
        'last_name',
        'email',
        'desc',
        'street_address',
        'city',
        'region',
        'postal_code',
    ];
}
