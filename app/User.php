<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * App\User
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property integer $rol_id
 * @property integer $city_id
 * @property integer $state_id
 * @property integer $country_id
 * @property string $status
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $unreadNotifications
 * @method static \Illuminate\Database\Query\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRolId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCityId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereStateId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCountryId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereStatus($value)
 * @mixin \Eloquent
 * @property string $first_name
 * @property string $last_name
 * @property-read \App\Role $role
 * @method static \Illuminate\Database\Query\Builder|\App\User whereFirstName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereLastName($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\UserFavorite[] $favorites
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'rol_id', 'city_id', 'state_id', 'country_id', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo('App\Role', 'rol_id');
    }

    public function favorites()
    {
        return $this->hasMany('App\UserFavorite');
    }

    public function views()
    {
        return $this->hasMany('App\PropertyView');
    }

    public function favProperties()
    {
        return $this->hasManyThrough('App\Property', 'App\UserFavorite', 'user_id', 'id');
    }
}
