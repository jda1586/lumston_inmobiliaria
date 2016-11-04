<?php
/**
 * Created by PhpStorm.
 * User: Pedro
 * Date: 03/11/2016
 * Time: 10:13 PM
 */

namespace App\Helpers;

use \Illuminate\Http\Request;

class Guardian
{
    /**
     * @param string $route
     * @return bool
     */
    static public function check($route)
    {
        $user = auth()->user();
        $permissions = json_decode($user->role->permissions, true);
        /*$route = Request::route()->getName();*/

        return in_array($route, $permissions['block']) ? false : true;
    }
}