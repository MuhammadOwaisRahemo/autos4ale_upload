<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class CarAdContactDetail extends MainModel
{
    use SoftDeletes;
    protected $guarded = [];
}
