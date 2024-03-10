<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransportGuide extends Model
{
    use HasFactory;

    public static $rules = [
        'consecutive_number' => 'required',
        'customer_id' => 'required',
        'customer_name' => 'required',
        'dispatch_date' => 'required|date',
        'delivery_status' => 'required',
        'order_id' => 'required',
        'status_id' => 'required',
    ];
    protected $fillable = [
        'consecutive_number',
       
        'customer_id',
        'customer_name',
        'dispatch_date',
        'delivery_status',
        'order_id',
        'status_id',
    ];

    public function status()
    {
        return $this->belongsTo(Status::class,'status_id','id');
    }

    public function deliveryProof()
    {
        return $this->hasOne(DeliveryProof::class);
    }

    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }
}
