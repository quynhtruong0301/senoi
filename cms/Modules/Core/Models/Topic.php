<?php

namespace Cms\Modules\Core\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $table = 'topics';

    protected $fillable = [
        'name',
        'slug',
        'created_at',
        'updated_at'
    ];

    public function blog()
    {
        return $this->hasMany(Blog::class, 'topic_id', 'id');
    }
}
