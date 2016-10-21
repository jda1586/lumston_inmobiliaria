<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\City
 *
 * @property integer $id
 * @property string $name
 * @property integer $state_id
 * @property string $country_id
 * @property float $latitude
 * @property float $longitude
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\State $state
 * @property-read \App\Country $country
 * @method static \Illuminate\Database\Query\Builder|\App\City whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\City whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\City whereStateId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\City whereCountryId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\City whereLatitude($value)
 * @method static \Illuminate\Database\Query\Builder|\App\City whereLongitude($value)
 * @method static \Illuminate\Database\Query\Builder|\App\City whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\City whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class City extends Model
{
    protected $fillable = ['name', 'state_id', 'country_id', 'latitude', 'longitude'];

    public function state()
    {
        return $this->belongsTo('App\State');
    }

    public function country()
    {
        return $this->belongsTo('App\Country');
    }
}
