<?php
/**
 * Created by PhpStorm.
 * User: Pedro
 * Date: 03/11/2016
 * Time: 10:13 PM
 */

namespace App\Helpers;

use App\User;
use \Illuminate\Http\Request;

class Guardian
{
    /**
     * @param $route
     * @param $uid
     * @return bool
     */
    static public function check($route, $uid = 0)
    {
        $user = $uid > 0 ? User::find($uid) : auth()->user();
        $permissions = json_decode($user->role->permissions, true);
        /*$route = Request::route()->getName();*/

        return in_array($route, $permissions['block']) ? false : true;
    }
}