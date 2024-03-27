<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class executing_cost_termOfPaymentPlan extends Model
{
    protected $fillable = [
        'term_type',
        'value_term',
        'value_rp_term',
        'month_plan',
        'guarantee',
    ];
}
