<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public static $rules = [
        'order_number' => 'required',
        'creation_date' => 'required|date',
        'order_type' => 'required',
    ];
    protected $fillable = [
        // Agrega los campos necesarios según tus necesidades
        'order_number',
        'creation_date',
        'order_type',
    ];
}
