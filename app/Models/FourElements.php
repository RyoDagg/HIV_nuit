<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class FourElements extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatable = ["windTitle","windText","fireTitle","fireText","earthTitle","earthText","waterTitle","waterText"];
}
