<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'model',
        'brand',
        'category',
        'price_per_day',
        'is_available'
    ];

    protected $casts = [
        'is_available' => 'boolean',
        'price_per_day' => 'decimal:2'
    ];
}
