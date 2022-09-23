<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'updated_at';
    public const DELETED_AT = 'deleted_at';
    protected $fillable = [
        'series',
        'model',
        'color',
        'min_price',
        'max_price',
        'description',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
