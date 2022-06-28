<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class CarAdSubCategory extends MainModel
{
    use SoftDeletes;
    protected $guarded = [];
}
