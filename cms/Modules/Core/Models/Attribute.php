<?php

namespace Cms\Modules\Core\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;

    protected $table = 'attributes';

    protected $fillable = [
        'type',
        'value',
        'display_name',
        'public',
        'created_at',
        'updated_at'
    ];

    public function pet()
    {
        return $this->belongsToMany(Pet::class, 'pet_attribute', 'attribute_id', 'pet_id');
    }
}
