<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laptop extends Model
{
    protected $fillable = [
        'brand',
        'model',
        'processor',
        'ram',
    ];
    /** @use HasFactory<\Database\Factories\LaptopFactory> */
    use HasFactory;
}
