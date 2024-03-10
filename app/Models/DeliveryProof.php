<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryProof extends Model
{
    use HasFactory;

    public static $rules = [
        'guide_photo' => 'required',
        'document_photos' => 'required',
        'transport_guide_id' => 'required',
    ];
    protected $fillable = [
        // Agrega los campos necesarios según tus necesidades
        'guide_photo',
        'document_photos',
        'transport_guide_id',
    ];
    public function transportGuide()
    {
        return $this->belongsTo(TransportGuide::class);
    }
}
