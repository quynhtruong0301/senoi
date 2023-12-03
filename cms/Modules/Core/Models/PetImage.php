<?php

namespace Cms\Modules\Core\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetImage extends Model
{
    use HasFactory;

    protected $table = 'pet_image';

    protected $fillable = [
        'pet_id',
        'url',
        'created_at',
        'updated_at'
    ];
}
