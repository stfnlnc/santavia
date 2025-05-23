<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Profession extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'job',
        'created_at',
        'updated_at',
    ];

    public function appointments(): BelongsToMany
    {
        return $this->belongsToMany(Appointment::class, 'appointment_profession')
            ->withTimestamps();
    }
}
