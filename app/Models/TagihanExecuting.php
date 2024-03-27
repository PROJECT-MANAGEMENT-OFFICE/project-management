<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagihanExecuting extends Model
{
    use HasFactory;

    protected $fillable = [
        'vendor',
        'deskripsi',
        'curr',
        'nilai_tagihan',
    ];
}
