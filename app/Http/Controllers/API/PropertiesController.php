<?php

namespace App\Http\Controllers\API;

use App\User;
use App\UserFavorite;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;

class PropertiesController extends Controller
{
    public function search()
    {
        return response()->json(['test' => true]);
    }

    public function fav_add()
    {
        /*if (!auth()->check())
            return response()->json([
                'ok' => false,
                'error' => 'auth',
            ]);*/

        $validator = Validator::make(Input::all(), [
            'id' => 'required|integer|exists:properties',
            'user' => 'required|integer|exists:users,id',
        ]);
        if ($validator->fails())
            return response()->json([
                'ok' => false,
                'error' => $validator->errors(),
            ]);

        $fav = UserFavorite::wherePropertyId(Input::get('id'))->whereUserId(Input::get('user'))->first();
        if ($fav) {
            $fav->delete();
            return response()->json([
                'ok' => true,
                'status' => 'toggle'
            ]);
        } else {
            UserFavorite::create([
                'user_id' => Input::get('user'),
                'property_id' => Input::get('id')
            ]);
            return response()->json([
                'ok' => true,
                'status' => 'selected'
            ]);
        }
    }

}
