<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    public $fillable = [
        'order_id',
        'snap_token',
        'status',
        'expired_at',
        'paid_at',
    ];
}
