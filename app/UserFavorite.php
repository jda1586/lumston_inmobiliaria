<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\UserFavorite
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $property_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\UserFavorite whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UserFavorite whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UserFavorite wherePropertyId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UserFavorite whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UserFavorite whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class UserFavorite extends Model
{
    protected $fillable = ['user_id', 'property_id'];

}
