<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;

use App\Http\Requests;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome.index', [
            'price_limit' => [
                Property::min('price'),
                Property::max('price')
            ]
        ]);
    }

    public function sale()
    {
        return view('welcome.sale');
    }

    public function contact()
    {
        return view('welcome.contact');
    }
}
