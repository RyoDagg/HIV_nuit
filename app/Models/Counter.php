<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Counter extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatable = ["firstTitle","firstNumber","firstIcon","secondTitle","secondNumber","secondIcon","thirdTitle","thirdNumber","thirdIcon",];
}
