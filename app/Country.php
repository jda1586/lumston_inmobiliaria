<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Country
 *
 * @property string $id
 * @property string $name
 * @property string $local_name
 * @property float $latitude
 * @property float $longitude
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\State[] $states
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\City[] $cities
 * @method static \Illuminate\Database\Query\Builder|\App\Country whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Country whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Country whereLocalName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Country whereLatitude($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Country whereLongitude($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Country whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Country whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Country extends Model
{
    protected $fillable = ['id', 'name', 'local_name', 'latitude', 'longitude'];

    public function states()
    {
        return $this->hasMany('App\State');
    }

    public function cities()
    {
        return $this->hasMany('App\City');
    }
}
