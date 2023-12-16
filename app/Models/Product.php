<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'description'
    ];

    const CREATED_AT = null;

    const UPDATED_AT = null;
}
