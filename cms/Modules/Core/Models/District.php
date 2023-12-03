<?php

namespace Cms\Modules\Core\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $table = 'districts';

    protected $fillable = [
        'province_id',
        'name',
        'slug',
        'created_at',
        'updated_at'
    ];

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id', 'id');
    }

    public function ward()
    {
        return $this->hasMany(Ward::class, 'district_id', 'id');
    }
}
