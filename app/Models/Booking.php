<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function room(){
        return $this->belongsTo(Room::class,'room_id','id');
    }

    public function timeSlot(){
        return $this->belongsTo(TimeSlot::class,'time_slot_id','id');
    }
}
