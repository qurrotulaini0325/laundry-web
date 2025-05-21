<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'service_type',
        'service_item',
        'service_speed',
        'pickup_date',
        'notes',
        'price'
    ];

    protected $casts = [
        'pickup_date' => 'date',
        'price' => 'decimal:2'
    ];
}