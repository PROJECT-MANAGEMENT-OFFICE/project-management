<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class executing_cost_bebanBahan extends Model
{
    protected $fillable = [
        'procurement',
        'vendor',
        'material', 
        'description',
        'volume',
        'unit',
        'total',
    ];
}
