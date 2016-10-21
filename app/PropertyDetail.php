<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\PropertyDetail
 *
 * @property integer $id
 * @property string $description
 * @property integer $property_id
 * @property integer $ground
 * @property integer $construction
 * @property string $amenities
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\PropertyDetail whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\PropertyDetail whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\PropertyDetail wherePropertyId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\PropertyDetail whereGround($value)
 * @method static \Illuminate\Database\Query\Builder|\App\PropertyDetail whereConstruction($value)
 * @method static \Illuminate\Database\Query\Builder|\App\PropertyDetail whereAmenities($value)
 * @method static \Illuminate\Database\Query\Builder|\App\PropertyDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\PropertyDetail whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PropertyDetail extends Model
{
    //
}
