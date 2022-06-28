<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class BlogTag extends MainModel
{
    use SoftDeletes;
    protected $guarded = [];

    public function tags()
	{
		return $this->belongsTo(Tag::class, 'tag_id', 'id');
	}
}
