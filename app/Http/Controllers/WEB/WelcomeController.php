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
            'properties' => Property::where(function ($q) {
                $q->where('operation', 'for_rent')
                    ->orWhere('operation', 'for_sale');
            })->where('status', 'active')->orderBy('created_at', 'desc')->limit(6)->get(),
            'price_limit' => [
                Property::min('price'),
                Property::max('price')
            ]
        ]);
    }

    public function sale()
    {
        return view('welcome.sale', [
            'properties' => Property::whereStatus('for_sale')->orWhere('status', 'for_rent')->orderBy('created_at', 'desc')->limit(3)->get(),
        ]);
    }

    public function contact()
    {
        return view('welcome.contact', [
            'properties' => Property::whereStatus('for_sale')->orWhere('status', 'for_rent')->orderBy('created_at', 'desc')->limit(3)->get(),
        ]);
    }

    public function why()
    {
        return view('welcome.why', [
            'properties' => Property::whereStatus('for_sale')->orWhere('status', 'for_rent')->orderBy('created_at', 'desc')->limit(3)->get(),
        ]);
    }
}
