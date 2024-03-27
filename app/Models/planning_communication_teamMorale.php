<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class planning_communication_teamMorale extends Model
{
    protected $fillable = [
        'deliverable',
        'description',
        'delivery_method',
        'frequency',
        'owner',
        'audience',
    ];
}
