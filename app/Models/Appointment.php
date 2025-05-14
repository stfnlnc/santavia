<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
        'city',
        'postal_code',
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
        'status',
        'person',
        'created_at',
        'updated_at',
    ];

    public function professions(): BelongsToMany
    {
        return $this->belongsToMany(Profession::class, 'appointment_profession')
            ->withTimestamps();
    }
}
