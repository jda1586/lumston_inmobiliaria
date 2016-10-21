<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\SystemLog
 *
 * @property integer $id
 * @property string $log_type
 * @property integer $log_id
 * @property string $after
 * @property string $before
 * @property integer $user_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\SystemLog whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SystemLog whereLogType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SystemLog whereLogId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SystemLog whereAfter($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SystemLog whereBefore($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SystemLog whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SystemLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SystemLog whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SystemLog extends Model
{
    //
}
