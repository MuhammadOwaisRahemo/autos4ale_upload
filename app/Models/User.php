<?php

namespace App\Models;

use App\Traits\DianujHashidsTrait;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use SoftDeletes,DianujHashidsTrait,Notifiable;
    protected $guard = 'user';
    protected $table = 'users';
    protected $guarded = [];


     /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function ads()
    {
        return $this->hasMany(CarAd::class,'user_id','id');
    }

}
