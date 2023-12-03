<?php

namespace Cms\Modules\Core\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'real_image',
        'virtual_image',
        'public',
        'created_at',
        'updated_at'
    ];

    public function pet()
    {
        return $this->hasMany(Pet::class, 'category_id', 'id');
    }
}
