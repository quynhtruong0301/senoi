<?php

namespace Cms\Modules\Core\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $table = 'pets';

    protected $fillable = [
        'user_id',
        'category_id',
        'province_id',
        'district_id',
        'ward_id',
        'name',
        'thumbnail',
        'price',
        'description',
        'sold',
        'favorite',
        'free',
        'active',
        'created_at',
        'updated_at'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function image()
    {
        return $this->hasMany(PetImage::class, 'pet_id', 'id');
    }

    public function attribute()
    {
        return $this->belongsToMany(Attribute::class, 'pet_attribute', 'pet_id', 'attribute_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id', 'id');
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id', 'id');
    }

    public function ward()
    {
        return $this->belongsTo(Ward::class, 'ward_id', 'id');
    }
}
