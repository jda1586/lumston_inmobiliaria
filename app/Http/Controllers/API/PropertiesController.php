<?php

namespace App\Http\Controllers\API;

use App\Property;
use App\User;
use App\UserFavorite;
use DB;
use Guardian;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Storage;
use Validator;

class PropertiesController extends Controller
{
    public function search()
    {
        if (Input::has('map')) {
            $sep_map = explode(',', Input::get('map'));
            $origLat = $sep_map[0];
            $origLon = $sep_map[1];
        } else {
            $origLat = 20.6690251;
            $origLon = -103.3388489;
        }

        $dist = 10 * 0.621371192;

        $properties = Property::select(DB::raw('id, price, address, bedrooms, bathrooms, operation, latitude, longitude,
        status, SQRT(POW(111.044736 * (latitude - ' . $origLat . '), 2) +
        POW(111.044736 * (' . $origLon . ' - longitude) * COS(latitude / 57.3), 2)) 
        AS distance'))
            ->where(function ($q) {
                if (Input::has('price'))
                    $q->where('price', '>=', Input::get('price.0'))
                        ->where('price', '<=', Input::get('price.1'));
            })
            ->where(function ($q) {
                if (Input::has('inmobs') && Input::get('inmobs') != 'all')
                    $q->where('type', Input::get('inmobs'));
            })
            ->where(function ($q) {
                if (Input::has('type') && Input::get('type') != 'all')
                    $q->where('operation', 'for_' . Input::get('type'));
            })
            ->where(function ($q) {
                if (Input::has('bedrooms'))
                    $q->where('bedrooms', '>=', Input::get('bedrooms'));
            })
            ->where(function ($q) {
                if (Input::has('bathrooms'))
                    $q->where('bathrooms', '>=', Input::get('bathrooms'));
            })
            ->where(function ($q) {
                $q->where('status', 'active')->orWhere(function ($q) {
                    if (Guardian::check('admin_property_views', Input::get('uid')))
                        $q->where('status', 'pending');
                });
            })
            ->having('distance', '<', $dist)
            ->orderBy('distance')->get();
        $result = $properties->map(function ($property, $key) {
            return [
                'id' => $property->id,
                'title' => $property->details->title,
                'image' => $property->images->first()->system == 'URL' ?
                    asset($property->images->first()->path) :
                    Storage::disk('public')->url($property->images->first()->path),
                'type' => trans('search.' . $property->operation),
                'price' => number_format($property->price, 2, '.', ','),
                'address' => $property->address,
                'bedrooms' => $property->bedrooms,
                'bathrooms' => $property->bathrooms,
                'area' => $property->details->ground,
                'position' => [
                    'lat' => $property->latitude,
                    'lng' => $property->longitude,
                ],
                'markerIcon' => $property->status == 'active' ? "marker-blue.png" : "marker-yellow.png",
            ];
        });

        return response()->json($result);
    }

    public function fav_add()
    {
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

    public function changeStatus()
    {
        $validator = Validator::make(Input::all(), [
            'id' => 'required|exists:users,id',
            'property' => 'required|exists:properties,id'
        ]);
        if ($validator->fails())
            return response()->json([
                'ok' => false,
                'error' => $validator->errors(),
            ]);

        $property = Property::find(Input::get('property'));
        switch ($property->status) {
            case 'pending':
                $property->status = 'active';
                break;
            case 'active':
                $property->status = 'disable';
                break;
            case 'disable':
                $property->status = 'active';
                break;
            default:
                break;
        }
        $property->save();

        return response()->json([
            'ok' => true,
        ]);

    }

    public function achived()
    {
        $validator = Validator::make(Input::all(), [
            'id' => 'required|exists:users,id',
            'property' => 'required|exists:properties,id'
        ]);
        if ($validator->fails())
            return response()->json([
                'ok' => false,
                'error' => $validator->errors(),
            ]);

        $property = Property::find(Input::get('property'));
        $property->status = 'archived';
        return response()->json([
            'ok' => true,
        ]);
    }
}
