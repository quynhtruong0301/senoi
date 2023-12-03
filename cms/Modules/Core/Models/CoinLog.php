<?php

namespace Cms\Modules\Core\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoinLog extends Model
{
    use HasFactory;

    protected $table = 'coin_log';

    protected $fillable = [
        'user_id',
        'coin',
        'type',
        'message',
        'created_at',
        'updated_at'
    ];
}
