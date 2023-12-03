<?php

namespace Cms\Modules\Core\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';

    protected $fillable = [
        'user_id',
        'amount_total',
        'merchant_key',
        'payment_key',
        'capture_method',
        'payment_gateway',
        'status',
        'created_at',
        'updated_at'
    ];
}
