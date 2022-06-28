<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends MainModel
{
    use SoftDeletes;
    protected $guarded = [];
}
