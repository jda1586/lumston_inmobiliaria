<?php

namespace App\Http\Controllers;

use App\City;
use App\Property;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Validator;

class PropertiesController extends Controller
{
    /**
     *
     */
    public function index()
    {
        /*// json for properties markers on map
        var props = [
        {
            title: 'Modern Residence in New York',
        image: '1-1-thmb.png',
        type: 'VENTA',
        price: '$1,550,000',
        address: '39 Remsen St, Brooklyn, NY 11201, USA',
        bedrooms: '3',
        bathrooms: '2',
        area: '3430 Sq Ft',
        position: {
            lat: 20.6690251,
            lng: -103.3388489
        },
        markerIcon: "marker-green.png"
    },

    ];*/

        $validator = Validator::make(Input::all(), [
            'city' => 'required|min:4|max:255'
        ]);
        if ($validator->fails())
            return redirect()->back()->withErrors($validator)->withInput();

        $city = City::where(function ($q) {
            $words = explode(' ', Input::get('city'));
            foreach ($words as $word) {
                $charts = [',', '/', '[', ']', '(', ')', '.'];
                $q->orWhere('name', 'like', '%' . str_replace($charts, '', $word) . '%');
            }
        })->first();

        if (!$city)
            return redirect()->back()->with('city', 'No encontramos la ciudad.');

        $properties = Property::where('city_id', $city->id)
            ->where('price', '>=', Input::get('price.0'))
            ->where('price', '<=', Input::get('price.1'))
            ->where(function ($q) {
                if (Input::has('inmobs') && Input::get('inmobs') != 'all')
                    $q->where('type', Input::get('inmobs'));
            })
            ->where(function ($q) {
                if (Input::has('type') && Input::get('type') != 'all')
                    $q->where('status', 'for_' . Input::get('type'));
            })
            ->get();
        return view('properties.index', [
            'city' => $city,
            'properties' => $properties,
        ]);
    }

    public function show($id)
    {
        return view('properties.show');
    }
}
