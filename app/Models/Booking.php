<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'patient_name',
        'check_in',
        'updated_at',
        'created_at'
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
