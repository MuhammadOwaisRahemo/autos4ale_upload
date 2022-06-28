<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class CarAdImage extends MainModel
{
    use SoftDeletes;
    protected $guarded = [];
}
