<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class size extends Model
{
    use HasFactory;

    protected $fillable = [
        'small',
        'large',
        'medium',
        'xLarge',
        'product_id',
    ];
}
