<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'company',
        'departure_airport',
        'arrival_airport',
        'flight_number',
        'flight_date',
        'discomfort'
    ];
}
