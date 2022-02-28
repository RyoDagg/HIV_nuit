<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Answers extends Model
{
    protected $fillable = [
        'user_id', 'question_id', 'textAnsr', "favAnsr",
        "lessFavAnsr", 'qtype'
    ];
    use HasFactory;
    use Translatable;
    protected $translatable = ['textAnsr', "favAnsr","lessFavAnsr", 'qtype'];
}
