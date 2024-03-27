<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class planning_risk extends Model
{
    protected $fillable = [
        'start_date',
        'description_ofrisk',
        'submitter',
        'name_project',
        'probability_factor',
        'impact_factor',
        'exposure',
        'Risk_reponse_type',
        'Risk_reponse_plan',
        'assigned_to',
        'status',
        'due_date',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name_project'
            ]
        ];
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('name_project', 'like', '%' . $search . '%');
            });
        });
    }
}
