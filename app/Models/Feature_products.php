<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature_products extends Model
{
    use HasFactory;

    protected $table = 'feature_products'; // Set the table name

    protected $fillable = [
        'name', 'class', 'price',
    ];

    // Optionally, you can add timestamps if your table has 'created_at' and 'updated_at' columns
    // public $timestamps = true;
}