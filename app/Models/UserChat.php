<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class UserChat extends MainModel
{
    use SoftDeletes;
    protected $guarded = [];
}
