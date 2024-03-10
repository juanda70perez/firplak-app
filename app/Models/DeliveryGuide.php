<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryGuide extends Model
{
    use HasFactory;

    public static $rules = [
        'consecutive_number' => 'required',
        'customer_id' => 'required',
        'customer_name' => 'required',
        'dispatch_date' => 'required|date',
    ];
    protected $fillable = [
        'consecutive_number',
        'customer_id',
        'customer_name',
        'dispatch_date',
    ];

    public function transportGuide()
    {
        return $this->belongsTo(TransportGuide::class);
    }
}
