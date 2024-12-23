<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'status',
        'contract_date',
        'contract_details'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
