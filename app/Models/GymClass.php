<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GymClass extends Model
{
    use HasFactory;

    protected $table = 'gym_classes';

    protected $fillable = [
        'name',
        'description',
        'trainer_id',
        'capacity',
        'start_time',
        'end_time',
        'location',
        'difficulty_level',
        'is_active',
    ];

    protected $casts = [
        'start_time' => 'datetime',
        'end_time' => 'datetime',
        'is_active' => 'boolean',
    ];

    public function trainer()
    {
        return $this->belongsTo(Trainer::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'gym_class_id');
    }

    public function getAvailableSpotsAttribute()
    {
        return $this->capacity - $this->bookings()->where('status', '!=', 'cancelled')->count();
    }
}
