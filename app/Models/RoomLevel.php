<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomLevel extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type'];

    // Relationship dengan Room
    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}

