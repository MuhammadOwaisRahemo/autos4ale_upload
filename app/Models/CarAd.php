<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\DianujHashidsTrait;

class CarAd extends MainModel
{
    use SoftDeletes, DianujHashidsTrait;
    protected $guarded = [];

    public function car_details()
    {
        return $this->belongsTo(CarAdDetail::class,'id','car_ad_id');
    }

    public function car_images()
    {
        return $this->hasMany(CarAdImage::class,'car_ad_id','id');
    }

    public function car_contact_details()
    {
        return $this->belongsTo(CarAdContactDetail::class,'id','car_ad_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class,'brand_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

}
