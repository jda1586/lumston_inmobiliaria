<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\State
 *
 * @property integer $id
 * @property string $name
 * @property string $country_id
 * @property float $latitude
 * @property float $longitude
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Country $country
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\City[] $cities
 * @method static \Illuminate\Database\Query\Builder|\App\State whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\State whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\State whereCountryId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\State whereLatitude($value)
 * @method static \Illuminate\Database\Query\Builder|\App\State whereLongitude($value)
 * @method static \Illuminate\Database\Query\Builder|\App\State whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\State whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class State extends Model
{
    protected $fillable = ['id', 'name', 'country_id', 'latitude', 'longitude'];

    public function country()
    {
        return $this->belongsTo('App\Country');
    }

    public function cities()
    {
        return $this->hasMany('App\City');
    }
}
