<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Model extends MainModel
{
    use SoftDeletes;
    protected $guarded = [];
}
