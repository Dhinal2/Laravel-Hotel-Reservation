<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [ // Or use protected $guarded = [];
        'room_name',
        'room_no',
        'room_type',
        'room_rate',
        'agent_rate', 
        'room_status',
    ];
}
