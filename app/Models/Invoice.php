<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    public static $rules = [
        'radication_date' => 'required|date',
        'transport_guide_id' => 'required',
    ];
    protected $fillable = [
        // Agrega los campos necesarios según tus necesidades
        'radication_date',
        'transport_guide_id',
    ];
    
    public function transportGuide()
    {
        return $this->belongsTo(TransportGuide::class);
    }
}
