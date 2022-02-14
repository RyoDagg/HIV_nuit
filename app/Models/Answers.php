<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    protected $fillable = [
        'user_id', 'question_id', 'textAnsr', "favAnsr",
        "lessFavAnsr"
    ];
    use HasFactory;
}
