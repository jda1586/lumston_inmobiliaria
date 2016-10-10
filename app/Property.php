<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'title',
        'description',
        'address',
        'outside_number',
        'inside_number',
        'city_id',
        'state_id',
        'country_id',
        'postal_code',
        'suburb',
        'price',
        'location',
        'unit',
    ];
}
