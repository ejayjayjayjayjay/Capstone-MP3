<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commission extends Model
{
    protected $table = 'payments';
    protected $fillable = ['order_id', 'total_commissions', 'user_id', 'total_profit'];

    // Add any additional model logic or relationships here
}
