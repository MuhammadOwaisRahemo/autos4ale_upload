<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\DianujHashidsTrait;

class CarAdDetail extends MainModel
{
    use SoftDeletes, DianujHashidsTrait;
    protected $guarded = [];
}
