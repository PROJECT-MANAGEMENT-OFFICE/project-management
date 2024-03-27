<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Initiating_ProjectDefinition extends Model
{
    protected $fillable = [
        'name_project',
        'code_project',
        'contract_value',
        'bussines_line',
        'date',
        'status',
        'source_ofFunds',
        'schema_bussines',
        'contract_duration',
        'warranty_period',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name_project'
            ]
        ];
    }

    // public function scopeFilter($query, array $filter)
    // {
    //     $query->when($filter['search'] ?? false, function ($query) use ($filter) {
    //         return $query->where('name_project', 'like', '%' . $filter['search'] . '%');
    //     });
    // }
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('name_project', 'like', '%' . $search . '%');
            });
        });
    }
}
