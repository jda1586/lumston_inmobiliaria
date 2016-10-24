<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;

use App\Http\Requests;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'price_limit' => [
                Property::min('price'),
                Property::max('price')
            ]
        ]);
    }

    public function sale()
    {
        return view('sale');
    }
}
