<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class UserSaveSearch extends MainModel
{
    use SoftDeletes;
    protected $guarded = [];
}
