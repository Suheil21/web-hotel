<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingList extends Model
{
    use HasFactory;

    protected $table = 'booking_lists';

    protected $fillable = [
        'user_id', 
        'room_id',
        'date',
        'start', 'end',
        'need',
        'status',
    ];

    protected $dates = ['date', 'start', 'end'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function roomBooking()
    {
        return $this->hasMany(RoomBooking::class, 'booking_id', 'id');
    }

    public function reschedule()
    {
        return $this->hasMany(Reschedule::class, 'booking_id', 'id');
    }
}
