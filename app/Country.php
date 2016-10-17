<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['id', 'name', 'local_name', 'latitude', 'longitude'];

    public function states()
    {
        return $this->hasMany('App/State');
    }

    public function cities()
    {
        return $this->hasMany('App/City');
    }
}
