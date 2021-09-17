<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    
    protected $fillable =
    [
        'name',
        'certificate',
        'phone_number',
        'specialization_id',
        'clinic_address',
        'avatar',
    ];

    function specialization()
    {
        return $this->belongsTo(Specialization::class);
    }
}
