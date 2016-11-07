<?php

namespace App\Http\Controllers\API;

use App\State;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;

class LocationController extends Controller
{
    public function getCities()
    {
        $validator = Validator::make(Input::all(), [
            'state' => 'required|integer|exists:states,id',
        ]);
        if ($validator->fails())
            return response()->json([]);

        $state = State::find(Input::get('state'));
        return response()->json($state->cities()->orderBy('name', 'ASC')->pluck('name', 'id'));
    }
}
