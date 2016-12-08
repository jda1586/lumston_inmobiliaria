<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyView extends Model
{
    protected $fillable = ['property_id', 'user_id'];

    public function property()
    {
        return $this->belongsTo('App\Property');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}