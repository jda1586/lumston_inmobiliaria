<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Property
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $type
 * @property string $address
 * @property string $outside_number
 * @property string $inside_number
 * @property integer $city_id
 * @property integer $state_id
 * @property integer $country_id
 * @property string $postal_code
 * @property string $suburb
 * @property integer $price
 * @property string $unit
 * @property integer $bedrooms
 * @property integer $bathrooms
 * @property float $latitude
 * @property float $longitude
 * @property string $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\PropertyDetail $details
 * @method static \Illuminate\Database\Query\Builder|\App\Property whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Property whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Property whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Property whereAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Property whereOutsideNumber($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Property whereInsideNumber($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Property whereCityId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Property whereStateId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Property whereCountryId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Property wherePostalCode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Property whereSuburb($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Property wherePrice($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Property whereUnit($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Property whereBedrooms($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Property whereBathrooms($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Property whereLatitude($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Property whereLongitude($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Property whereStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Property whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Property whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $category
 * @method static \Illuminate\Database\Query\Builder|\App\Property whereCategory($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\PropertyImage[] $images
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\UserFavorite[] $users_fav
 */
class Property extends Model
{
    protected $fillable = [
        'user_id', 'type', 'address', 'outside_number', 'inside_number', 'city_id', 'state_id', 'country_id',
        'postal_code', 'suburb', 'price', 'unit', 'bedrooms', 'bathrooms', 'latitude', 'longitude', 'status',
    ];

    public function details()
    {
        return $this->hasOne('App\PropertyDetail');
    }

    public function images()
    {
        return $this->hasMany('App\PropertyImage');
    }

    public function users_fav()
    {
        return $this->hasMany('App\UserFavorite');
    }

    public function favCheck($user_id = 0)
    {
        return $this->hasMany('App\UserFavorite')->whereUserId($user_id)->count() > 0 ? true : false;
    }
}
