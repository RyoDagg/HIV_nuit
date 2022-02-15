<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Results extends Model
{
    protected $fillable = [
        'user_id', 'hTotal', 'mTotal', 'sTotal','bTotal','hearts','minds','souls','bodies'
    ];
    use HasFactory;
}
