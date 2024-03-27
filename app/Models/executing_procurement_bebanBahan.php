<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class executing_procurement_bebanBahan extends Model
{
    protected $fillable = [
        'procurement',
        'name_project',
        'vendor',
        'description_service',
        'volume',
        'units',
        'total',
        'start_toOrder',
        'finish_toOrder',
    ];  
}
