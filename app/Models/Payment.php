<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'id',
        'total_profit',
        'total_commissions',
        'user_id',
        'payments',
    ];
}
