<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\DianujHashidsTrait;

class Blog extends MainModel
{
    use SoftDeletes, DianujHashidsTrait;
    protected $guarded = [];

    public function tags()
    {
        return $this->belongsToMany(
            BlogTag::class,
            'blog_tags',
            'blog_id',
            'tag_id'
        );
    }

    public function blog_tag()
    {
        return $this->HasMany(BlogTag::class, 'blog_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(CarAdCategory::class,'category_id');
    }
}
