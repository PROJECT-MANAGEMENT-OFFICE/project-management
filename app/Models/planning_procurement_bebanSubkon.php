<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class planning_procurement_bebanSubkon extends Model
{
    protected $fillable = [
        'procurement_subkon',
        'name_project',
        'vendor_subkon',
        'description_service_subkon',
        'volume_subkon',
        'units_subkon',
        'total_subkon',
        'start_toOrder_subkon',
        'finish_toOrder_subkon',
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
