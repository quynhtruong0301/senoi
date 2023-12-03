<?php

namespace Cms\Modules\Core\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;

    protected $table = 'wards';

    protected $fillable = [
        'district_id',
        'name',
        'slug',
        'created_at',
        'updated_at'
    ];

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id', 'id');
    }
}
