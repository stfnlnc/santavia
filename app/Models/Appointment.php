<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'lastname',
        'firstname',
        'email',
        'phone',
        'birth',
        'address',
        'nationality',
        'travel_date',
        'start_date',
        'start_location',
        'end_location',
        'way',
        'duration',
        'informations',
        'prescription',
        'care',
        'type',
        'created_at',
        'updated_at',
    ];
}
