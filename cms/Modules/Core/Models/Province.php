<?php

namespace Cms\Modules\Core\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $table = 'provinces';

    protected $fillable = [
        'name',
        'slug',
        'created_at',
        'updated_at'
    ];

    public function district()
    {
        return $this->hasMany(District::class, 'province_id', 'id');
    }
}
