<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    public static $rules = [
        'name' => 'required',
    ];
    protected $fillable = ['name'];

    public function transportGuides()
    {
        return $this->hasMany(TransportGuide::class);
    }
}
