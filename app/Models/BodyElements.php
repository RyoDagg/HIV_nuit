<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class BodyElements extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatable = ["purpleTitle","title","subtitle","elem1title","elem1subtitle","elem1body","elem1picture","elem2title","elem2subtitle","elem2body","elem2picture","elem3title","elem3subtitle","elem3body","elem3picture","elem4title","elem4subtitle","elem4body","elem4picture",];
}
