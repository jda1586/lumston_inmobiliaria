<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\PropertyImage
 *
 * @property integer $id
 * @property integer $property_id
 * @property string $name
 * @property string $path
 * @property string $system
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\PropertyImage whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\PropertyImage wherePropertyId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\PropertyImage whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\PropertyImage wherePath($value)
 * @method static \Illuminate\Database\Query\Builder|\App\PropertyImage whereSystem($value)
 * @method static \Illuminate\Database\Query\Builder|\App\PropertyImage whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\PropertyImage whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\Property $property
 */
class PropertyImage extends Model
{
    protected $fillable = ['property_id', 'name', 'path', 'system'];

    public function property()
    {
        return $this->belongsTo('App\Property');
    }
}
