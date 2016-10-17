<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['name', 'state_id', 'country_id', 'latitude', 'longitude'];

    public function state()
    {
        return $this->belongsTo('App/State');
    }

    public function country()
    {
        return $this->belongsTo('App/Country');
    }
}
