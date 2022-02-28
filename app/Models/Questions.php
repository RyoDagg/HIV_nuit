<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Questions extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatable = [
        'question',
        "favorableAnswer",
        "firstPossibility",
        'secondPossibility',
        "thirdPossibility",
        "type",
    ];
}
