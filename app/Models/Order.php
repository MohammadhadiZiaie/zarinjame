<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
use App\Models\Contract;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_number',
        'customer_id',
        'previous_order_id',
        'status',
        'order_date',
        'type',
        'delivery_date',
        'assigned_to',
        'process_id',
        'product_name',
        'project_code_before',
        'technical_code',
        'product_code',
        'notes',
        'services',
        'size_scheme',
        'quantity',
        'main_fabric',
        'additional_fabric',
        'indirect_materials'
    ];

    protected $casts = [
        'services' => 'array',
        'main_fabric' => 'array',
        'additional_fabric' => 'array',
        'indirect_materials' => 'array',
        'order_date' => 'datetime',
        'delivery_date' => 'datetime',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function previousOrder()
    {
        return $this->belongsTo(Order::class, 'previous_order_id');
    }
    public function assignedUser()
{
    return $this->belongsTo(User::class, 'assigned_to');
}

public function process()
{
    return $this->belongsTo(Process::class, 'process_id');
}

public function contracts()
{
    return $this->hasOne(Contract::class);
}



}
