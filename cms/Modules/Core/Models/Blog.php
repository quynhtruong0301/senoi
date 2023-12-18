<?php

namespace Cms\Modules\Core\Models;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = "blogs";

    protected $fillable = [
        'topic_id',
        'title',
        'author',
        'image',
        'content',
        'description',
        'slug',
        'public',
        'tag',
        'order',
        'created_at',
        'updated_at'
    ];

    protected $hidden = [];

    public function topic()
    {
        return $this->belongsTo(Topic::class, 'topic_id', 'id');
    }

    public function comment()
    {
        return $this->hasMany(Comment::class, 'blog_id', 'id');
    }
}

