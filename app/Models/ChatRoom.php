<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class ChatRoom extends MainModel
{
    use SoftDeletes;
    protected $guarded = [];


    public function sender()
    {
        return $this->belongsTo(User::class,'sender_id');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class,'receiver_id');
    }
}
