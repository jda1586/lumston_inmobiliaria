<?php

namespace App\Http\Controllers\WEB;

use App\Property;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome.index', [
            'properties' => Property::whereStatus('for_sale')->orderBy('created_at', 'desc')->limit(6)->get(),
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

    public function why()
    {
        return view('welcome.why');
    }
}
