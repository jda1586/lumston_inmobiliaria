<?php

namespace App\Http\Controllers\WEB;

use App\City;
use App\Property;
use App\PropertyDetail;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Validator;

use App\Http\Controllers\Controller;

class PropertiesController extends Controller
{

    /**
     * @return $this|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        $validator = Validator::make(Input::all(), [
            /*'city' => 'required|min:4|max:255'*/
        ]);
        if ($validator->fails())
            return redirect()->back()->withErrors($validator)->withInput();

        if (Input::has('city')) {
            $city = City::where(function ($q) {
                $words = explode(' ', Input::get('city'));
                foreach ($words as $word) {
                    $charts = [',', '/', '[', ']', '(', ')', '.'];
                    $q->orWhere('name', 'like', '%' . str_replace($charts, '', $word) . '%');
                }
            })->first();
        } else {
            $city = new City();
        }

        if (Input::has('city') && isset($city->id)) {
            $origLat = $city->latitude;
            $origLon = $city->longitude;
        } else {
            $origLat = 20.6690251;
            $origLon = -103.3388489;
        }

        $dist = 10 * 0.621371192;

        $properties = Property::select(DB::raw('*, SQRT(POW(111.044736 * (latitude - ' . $origLat . '), 2) +
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
                    $q->where('status', 'for_' . Input::get('type'));
            })
            ->where(function ($q) {
                if (Input::has('bedrooms')) {
                    // search
                }
            })
            ->where(function ($q) {
                if (Input::has('bathrooms')) {
                    //search
                }
            })
            ->having('distance', '<', $dist)
            ->orderBy('distance')->get();

        return view('properties.index', [
            'city' => $city ? $city : new City(),
            'properties' => $properties,
            'input' => Input::all(),
            'price_limit' => [
                Property::min('price'),
                Property::max('price')
            ]
        ]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function show($id)
    {
        $validator = Validator::make(['id' => $id], ['id' => 'required|exists:properties']);
        if ($validator->fails())
            return redirect()->route('properties.index');

        return view('properties.show', [
            'property' => Property::find($id),
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('properties.create');
    }

    public function store()
    {
        $validator = Validator::make(Input::all(), [
            /* Property */
            'type' => 'required|string',
            'address' => 'required',
            'outside' => 'required',
            'inside' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postalCode' => 'required',
            'suburb' => 'required',
            'price' => 'required',
            'bedrooms' => 'required',
            'bathrooms' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',

            /* PropertyDetails */
            'title' => 'required',
            'description' => 'required',
            'ground' => 'required',
            'construction' => 'required'
        ]);
        if ($validator->fails())
            return redirect()->route('properties.create')->withErrors($validator)->withInput(Input::all());

        $user = auth()->user();
        $property = new Property([
            'user_id' => $user->id,
            'type' => Input::get('type'),
            'address' => Input::get('addres'),
            'outside_number' => Input::get('outside'),
            'inside_number' => Input::get('inside'),
            'city_id' => Input::get('city'),
            'state_id' => Input::get('state'),
            'country_id' => 'MEX',
            'postal_code' => Input::get('postalCode'),
            'suburb' => Input::get('suburb'),
            'price' => Input::get('price'),
            'unit' => 'MXN',
            'bedrooms' => Input::get('bedrooms'),
            'bathrooms' => Input::get('bathrooms'),
            'latitude' => Input::get('latitude'),
            'longitude' => Input::get('longitude'),
            'status' => 'pending',
        ]);
        if ($property->save()) {
            $property->details()->save(new PropertyDetail([
                'title' => Input::get('title'),
                'description' => Input::get('description'),
                'ground' => Input::get('ground'),
                'construction' => Input::get('construction'),
                'amenities' => ''
            ]));
        } else {
            return redirect()->route('properties.index')->with('error', 'No ha sido posible guardar la propiedad');
        }

        return redirect()->route('properties.show', ['id' => $property->id]);
    }
}
