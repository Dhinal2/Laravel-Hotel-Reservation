<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    // Define the table name if it's not the plural form of the model name
    protected $table = 'room_types';

    // Specify which attributes can be mass assignable
    protected $fillable = [
        'name',
        'description',
        'base_price',
        'agent_price',
    ];
}
