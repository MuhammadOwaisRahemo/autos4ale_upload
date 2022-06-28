<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class CarAdCategory extends MainModel
{
    use SoftDeletes;
    protected $guarded = [];

    public function subCategory()
    {
        return $this->hasMany(CarAdSubCategory::class, 'category_id', 'id');
    }
}
