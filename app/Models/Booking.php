<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    /**
     * Get the hotel room that owns the booking.
     */
    public function room()
    {
        return $this->belongsTo(Room::class);
    }

}
