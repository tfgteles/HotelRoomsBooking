<?php
// StAuth10065: I Tiago Franco de Goes Teles, 000786450 certify that this material is my original work. No other person's work has been used without due acknowledgement. I have not made my work available to anyone else.

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    /**
     * Get the bookings for the hotel room.
     */
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
